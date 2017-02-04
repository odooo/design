/**
 * AwesomeSelector
 * A customizable awesome autocomplete select list
 * 
 * @author Eldo Magan <magan.eldo@gmail.com>
 */
!function(global, $) {

    // AwesomeSelector Class
    function AwesomeSelector(element, options) {
       this.options = $.extend({}, AwesomeSelector.DEFAULTS, options);
       this.$element = $(element);
       this.$items = $(this.options.list).eq(0).children();

       $(this.options.list).remove();

       this.init();
    }

    AwesomeSelector.NAME = 'awesomeSelector';
    AwesomeSelector.VERSION = '0.1.1';
    AwesomeSelector.DEFAULTS = {

    };

    AwesomeSelector.prototype.init = function() {
        this.$element.hide();
        this.$awesomeSelector = $('<div class="awesome-selector"></div>');

        // We ansure that items with keep their styles
        if (this.options.list[0] == '.') {
            this.$awesomeSelector.addClass(this.options.list.substr(1));
        } else if (this.options.list[0] == '#') {
            this.$awesomeSelector.attr('id', this.options.list.substr(1));
        }

        this.$awesomeSelector.css('position', 'relative');

        // Displalyed item
        this.$displayedItem = $('<div></div>');        
        this.$awesomeSelector.append(this.$displayedItem);
        this.selectDefaultValue();

        // Dropdown widget
        this.$dropdown = $('<div class="awesome-selector-dropdown"></div>');
        this.$dropdown.css({
            position: 'absolute',
            width: '100%',
            background: '#f4f4f4',                    
            border: '1px solid black',
            borderTop: 0,
            zIndex: 999999,
        });
        this.$awesomeSelector.append(this.$dropdown);

        // Search input
        this.$searchInput = $('<input type="text" class="form-control">');
        this.$dropdown.append(this.$searchInput);
        this.$searchInput.wrap('<div style="padding: 10px; border-bottom: 1px solid black;"/>');

        // Items list
        var $listWrapper = $('<div />');
        $listWrapper.css({
            maxHeight: 400,
            overflow: 'auto',
        });
        $listWrapper.append(this.$items);
        this.$dropdown.append($listWrapper);

        this.$dropdown.hide();
        this.$awesomeSelector.insertAfter(this.$element);

        this.onDisplayedItemClick();
        this.onItemClick();
        this.onSearch();

        $(window).on('click', function() {
            $('.awesome-selector-dropdown').hide();
        })
    }

    AwesomeSelector.prototype.selectDefaultValue = function() {
        var value = this.$element.val();

        if (value) {
            for (var i = 0, length = this.$items.length; i < length; i++) {
                if (this.$items.eq(i).data('value') == value) {
                    this.$displayedItem.html(this.$items.eq(i).clone());
                    break;
                }
            }
        } else {
            this.$displayedItem.html(this.$items.eq(0).clone());
            this.$element.val(this.$items.eq(0).data('value'));
        }
    }

    AwesomeSelector.prototype.onDisplayedItemClick = function() {
        this.$displayedItem.on('click', function(event) {
            event.stopPropagation();                    
            this.$dropdown.toggle();                    

            if (this.$dropdown.is(':visible')) {
                this.$searchInput.focus();
            }
        }.bind(this));
    }

    AwesomeSelector.prototype.onItemClick = function() {
        var _self = this;
        
        this.$items.on('click', function(event) {
            var value = $(this).data('value');
            
            if (typeof value == 'undefined') {
                throw 'List item ' + $(this).index() + ' does not have data-value attribute !'
            } else {
                _self.$element.val(value);
                _self.$element.trigger('change');
            }

            _self.$displayedItem.html($(this).clone());
            _self.$dropdown.toggle();
        });
    }

    AwesomeSelector.prototype.onSearch = function() {
        this.$searchInput.on('click', function(event) {
            event.stopPropagation();
        });

        this.$searchInput.on('keyup', function(event) {
            var keywords = this.$searchInput.val().trim().split(' ');
                    
            if (keywords.length == 0) {
                this.$items.fadeIn();
            } else {
                this.$items.each(function() {
                    var searchable = $(this).data('search');
                    
                    if (typeof searchable == 'undefined') {
                        $(this).fadeOut();
                        return;
                    }

                    for (var i in keywords) {
                        if (searchable.toLowerCase().match(new RegExp(keywords[i].toLowerCase(), 'g'))) {
                            $(this).fadeIn();
                            return;   
                        }
                    }
                    
                    $(this).fadeOut();
                });
            }
        }.bind(this));
    }

    // Plugin
    function Plugin(option) {
        var args = $.makeArray(arguments).slice(1);

        return this.each(function() {
            var $this = $(this);
            var instance = $this.data(AwesomeSelector.NAME);

            if (!instance) {
                var options = $.extend({}, $this.data(), typeof Option == 'object' && options);
                $this.data(AwesomeSelector.NAME, (instance = new AwesomeSelector(this, options)));
            }

            if (typeof option == 'string') {
                instance[options].apply(instance, args);
            }
        })
    }

    // make the plugin
    var old = $.fn[AwesomeSelector.NAME];
    $.fn[AwesomeSelector.NAME] = Plugin;
    $.fn[AwesomeSelector.NAME].Constructor = AwesomeSelector;

    // No conflict
    $.fn[AwesomeSelector.NAME].noConflict = function () {
        $.fn[AwesomeSelector.NAME] = old
        return this
    }

    // Data API
    $(window).on('load', function() {
        $('[data-select="awesome-selector"]').each(function() {
            var $this = $(this);
            var data = $this.data();

            if (typeof data.list != 'string') {
                console.log('info', 'You must set data-list attriute')
                return;
            }

            if ($(data.list).length == 0) {
                console.log('info', "List does not have any item");
                return;
            }

            Plugin.call($this, data);
        });
    });

}(window, jQuery);