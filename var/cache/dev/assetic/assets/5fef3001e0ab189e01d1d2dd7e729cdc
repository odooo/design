(function() {
    
    var AjaxifySearch = window.AjaxifySearch = function(element, options) {
        this.element = element
        this.options = options
        this.total = 0
        this.currentPage = 1

        this.data = {
            entity: options.entity,
            perpage: options.perpage,
            search: '',
        }        

        for(var option in options) {
            if (AjaxifySearch.OPTIONS.indexOf(option) == -1) {
                this.data[option] = options[option]
            }
        }

        this.$paginationContainer = this.createPaginationContainer()
        this.$itemContainer = this.element.find(this.options.itemContainer)        

        this.createFilterContainer()
        this.createLoader()
        this.init()
    }

    AjaxifySearch.OPTIONS = ['request', 'entity', 'perpage', 'itemContainer', 'onload']

    AjaxifySearch.prototype = {

        init: function() {
            var _self = this
            
            if (typeof this.request != 'undefined') {
                this.request.abort()
            }   

            this.request = $.ajax({
                url: AjaxifySearch.URL.count,
                type: 'GET',
                data: this.data
            })
            .done(function(count) {
                _self.total = count
                _self.showPagination()    
                _self.request = void 0
            })
        },

        showPagination: function() {

            var nbPage = Math.ceil(this.total / this.options.perpage)
            var currentPage3 = this.currentPage + 3
            var end3 = nbPage - 3
            
            this.$paginationContainer.html('')

            this.$paginationContainer.append(this.createPreviousLink(this.currentPage, nbPage))
            this.$paginationContainer.append(this.createPaginationLink(1))

            if (this.currentPage < 5) {
                for (var i = 2; i <= this.currentPage; i++) {
                    this.$paginationContainer.append(this.createPaginationLink(i))                    
                }
            } else {

                this.$paginationContainer.append(this.createEllipsis())
                
                for (var i = this.currentPage - 3; i <= this.currentPage; i++) {
                    this.$paginationContainer.append(this.createPaginationLink(i))                    
                }
            }

            for (var i = this.currentPage + 1; i <= currentPage3 && i <= nbPage; i++) {
                this.$paginationContainer.append(this.createPaginationLink(i))                    
            }

            if (this.currentPage <= end3) {                
                this.$paginationContainer.append(this.createEllipsis())
                this.$paginationContainer.append(this.createPaginationLink(nbPage))
            }               

            this.$paginationContainer.append(this.createNextLink(this.currentPage, nbPage))
        },

        createFilterContainer: function() {

            var _self = this
            var $row = $('<div class="row"></div>').css('margin-bottom', '20px') 
            var $filterCol = $('<div class="col-sm-2"></div>')
            var $searchCol = $('<div class="col-sm-4 pull-right"></div>')
            var $inputGroup = $('<div class="input-group"></div>')

            var $input = $('<input class="form-control">')
            $input.on('keyup', function(e) {
                var search = $(this).val()
                
                _self.search(search)
            })

            var $perpage = $('<select class="form-control"></select>')
            $perpage.append('<option value="0">Par page</option>')
            $perpage.append('<option value="5">5</option>')
            $perpage.append('<option value="10">10</option>')
            $perpage.append('<option value="20">20</option>')
            $perpage.append('<option value="50">50</option>')
            $perpage.append('<option value="100">100</option>')
            $perpage.append('<option value="200">200</option>')

            $perpage.on('change', function(e) {
                var perpage = parseInt($(this).val())
                
                if (perpage != 0 && perpage != _self.options.perpage) {
                    _self.options.perpage = perpage
                    _self.data.perpage = perpage
                    _self.search(_self.data['search'])
                }                
            })

            $inputGroup.append('<span class="input-group-addon"><i class="fa fa-search"></i></span>')
            $inputGroup.append($input)
            $searchCol.append($inputGroup)
            $filterCol.append($perpage)
            $row.append($filterCol)
            $row.append($searchCol)
            this.element.parent().prepend($row)
        },

        createPaginationContainer: function() {
            var $row = $('<div class="row"></div>')
            var $div = $('<div class="text-center"></div>')
            var $ul = $('<ul class="pagination"></ul>')

            $div.append($ul)
            $row.append($div)

            this.element.parent().append($row)

            return $ul
        },

        createLoader: function() {
            var $loader = $('<div class="text-center"><i class="fa fa-spinner fa-spin"></i>&nbsp;&nbsp;Chargement...</div>')

            this.element.parent().css('position', 'relative')

            $loader.css({
                position: 'absolute',
                width: '100%',
                padding: '20px',
                textAlign: 'center',
                top: '50%',
                transform: 'translateY(-50%)',
                backgroundColor: '#fff',            
            }).hide()

            this.$loader = $loader
            this.element.parent().prepend($loader)
        },

        createPaginationLink: function(page) {
            var _self = this
            var $link = $('<li><a href="#">'+ page +'</a></li>')
          
            if (page == this.currentPage) {
                $link.addClass('active')
                $link.find('a').on('click', function(e) {
                    e.preventDefault()
                })
            } else {
                $link.find('a').on('click', function(e) {
                    e.preventDefault()

                    _self.loadMore(page)
                })
            }                

            return $link
        },

        createPreviousLink: function(page, nbPage) {

            var $link = this.createPaginationLink(page - 1)
            
            $link.find('a').text('<').on('click', function(e) {
                e.preventDefault()
            })

            if (page == 1) {
                $link.find('a').off('click')
                $link.addClass('disabled')
            }            

            return $link
        },

        createNextLink: function(page, nbPage) {
            var $link = this.createPaginationLink(page + 1)
            
            $link.find('a').text('>').on('click', function(e) {
                e.preventDefault()
            })

            if (page == nbPage) {
                $link.find('a').off('click')
                $link.addClass('disabled')
            }

            return $link
        },

        createEllipsis: function() {
            var $link = this.createPaginationLink(0)

            $link.find('a').off('click').text('...').on('click', function(e) {
                e.preventDefault()
            })

            $link.addClass('disabled')

            return $link
        },

        search: function(search) {
            var _self = this            
            this.data['search'] = search

            if (typeof this.request != 'undefined') {
                this.request.abort()
            }

            this.showLoader()

            this.request = $.ajax({
                url: AjaxifySearch.URL.search,
                type: 'GET',
                data: this.data,
                dataType: 'json'
            })
            .done(function(data) {                
                _self.request = void 0

                _self.total = data.total
                _self.currentPage = 1

                _self.replaceContent(data.views)
            })
        },

        loadMore: function(page) {
            var _self = this
            var data = this.data

            data['page'] = page

            if (typeof this.request != 'undefined') {
                this.request.abort()
            }

            this.showLoader()

            this.request = $.ajax({
                url: AjaxifySearch.URL.search,
                type: 'GET',
                data: data,
                dataType: 'json'
            })
            .done(function(data) {
                _self.request = void 0
                _self.currentPage = page
                
                _self.replaceContent(data.views)
            })
        },      

        replaceContent: function(view) {

            this.hideLoader()
            this.$itemContainer.html('')                
            this.$itemContainer.append(view)

            if (typeof window[this.options.onload] === 'function') {
                window[this.options.onload]()
            }

            this.showPagination()                
        },

        showLoader: function() {
            this.$loader.css({
                top: '50%',
                transform: 'translateY(-50%)',
            })

            this.$loader.show()
        },

        hideLoader: function() {
            this.$loader.hide()
        },
    }


    $.fn.ajaxifySearch = function() {

        return this.each(function() {
            var $el = $(this)
            var data = $el.data()

            if (typeof data.itemContainer == 'undefined') {
                data.itemContainer = 'tbody'
            }

            if (typeof data.onload === 'undefined') {
                data.onload = 'onContentLoaded'
            }

            $el.data('ajaxify-search', new AjaxifySearch($el, data))
        })
    }
        
    $(document).ready(function() {
        $('[data-request="ajaxify-search"]').each(function() {
            $(this).ajaxifySearch()
        })
    })    
})()