/**
 * A progressive JS Frontend library
 * 
 * @author Eldo Magan <magan.eldo@gmail.com>
 */
!(function(global, factory) {
    global.Yop = factory(global);
})(window, function(global) {

'use strict';

var document = global.document, $ = global.jQuery;
var T_STRING   = 'string',
    T_OBJECT   = 'object',
    T_UNDEF    = 'undefined',
    T_FUNCTION = 'function';

/**
 * Check if passed argument is a function
 * @param   { * } value 
 * @returns { Boolean }
 */
function isFunction(value) {
    return typeof value === T_FUNCTION
}

/**
 * Check if passed argument is a function
 * @param   { * } value 
 * @returns { Boolean }
 */
function isObject(value) {
    return typeof value === T_OBJECT
}

/**
 * Check if passed argument is undefined
 * @param   { * } value -
 * @returns { Boolean } -
 */
function isUndefined(value) {
    return typeof value === T_UNDEF
}

/**
 * Check if passed argument is a string
 * @param   { * } value -
 * @returns { Boolean } -
 */
function isString(value) {
    return typeof value === T_STRING
}

/**
 * Check if passed argument is empty. Different from falsy, because we dont consider 0 or false to be blank
 * @param { * } value -
 * @returns { Boolean } -
 */
function isBlank(value) {
    return isUndefined(value) || value === null || value === ''
}

/**
 * Check if passed argument is a kind of array
 * @param   { * } value -
 * @returns { Boolean } -
 */
function isArray(value) {
    return Array.isArray(value) || value instanceof Array
}

/**
 * Check whether an array contains an item
 * @param   { Array } array - target array
 * @param   { * } item - item to test
 * @returns { Boolean } -
 */
function contains(array, item) {
    return ~array.indexOf(item)
}

/**
 * Convert a string containing dashes to camel case
 * @param   { String } str - input string
 * @returns { String } my-string -> myString
 */
function toCamel(str) {
    return str.replace(/-(\w)/g, function (_, c) { return c.toUpperCase(); })
}

/**
 * Faster String startsWith alternative
 * @param   { String } str - source string
 * @param   { String } value - test string
 * @returns { Boolean } -
 */
function startsWith(str, value) {
    return str.slice(0, value.length) === value
}

/**
 * Extend any object with other properties
 * @param   { Object } src - source object
 * @returns { Object } the resulting extended object
 *
 * var obj = { foo: 'baz' }
 * extend(obj, {bar: 'bar', foo: 'bar'})
 * console.log(obj) => {bar: 'bar', foo: 'bar'}
 *
 */
function extend(src) {
    var obj, args = arguments;
    for (var i = 1; i < args.length; ++i) {
        if (obj = args[i]) {
            for (var key in obj) {
                src[key] = obj[key];
            }
        }
    }

    return src;
}

function createClass(className, methods) {
    var klass = function() {
        if (isFunction(methods.__init)) {
            this.__init.apply(this, arguments);
        }
    }

    klass.NAME = className
    
    extend(klass.prototype, methods);
    
    return klass;
}

var Route = createClass('Route', {
    __init: function() {
        this.url = '';
        this.title = '';
        this.at = void 0;        
        this.action = function() {};
        this.pushState = true;
    },

    getState: function() {
        return {
            url: this.url,
            at: this.at,
            title: this.title,
        }
    },
});

Route.createFromState = function(state) {
    var route = new Route();
    this.url = state.url;
    this.at = state.at;
    this.title = this.title;

    return route;
}

/**
 * Router class
 */
var Router = createClass('Router', {
    __init: function() {
        this.protocol = document.location.protocol;
        this.host = document.location.host;
        this.origin = document.location.origin;
        this.path = document.location.pathname || '';
        this.hash = document.location.hash || '';
        this.routeChangeListeners = [];                
    },

    init: function() {
        window.addEventListener('popstate', function(event) {
            var route = event.state;
            
            for(var i in this.routeChangeListeners) {                  
                route = this.routeChangeListeners[i](route);                
                if (isFunction(route.action)) {
                    route.action();

                    if (route.pushState) {
                        this.route(route);
                    }
                }
            }
        }.bind(this));

        window.addEventListener('load', function(event) {
            var route = this.route();
            
            if (route === false) {
                route = global.history.state;
                if (route) {
                    route = Route.createFromState(route);
                }
            }

            if (route) {
                route.pushState = false;
            }

            if (route) {
                for(var i in this.routeChangeListeners) {                
                    route = this.routeChangeListeners[i](route);
                    if (route && isFunction(route.action)) {
                        route.action();
                    }
                }
            }            
        }.bind(this));
    },    

    /**
     * Get route from current url or change url to a route
     */
    route: function(route) {
        if (isUndefined(route)) {
            return this.parseUrl();
        } else {
            global.history.pushState(route.getState(), null, this.generateUrl(route));
        }
    },

    /**
     * Parse current url to Yop route
     */
    parseUrl: function() {
        var route = false;

        if (startsWith(this.hash, '#!')) {
            var hash = this.hash.substr(2).split('@');
            route = {
                url: hash[0],
                at: hash[1],                
            };

            if (!startsWith(route.url, 'http')) {
                var newUrl = this.origin;
                if (route.url.startsWith('/')) {
                    newUrl += route.url;
                } else {
                    newUrl += this.path + route.url;
                }

                route.url = newUrl;
            }

            route = Route.createFromState(route);
        }

        return;
    },

    /**
     * Generate url from route
     */
    generateUrl: function(route) {
        var url =  this.origin + this.path + '#!' + route.url;

        if (isString(route.at)) {
            url += '@' + route.at;
        }

        return url;
    },

    /**
     * Register onRouteChange listener
     */
    onRouteChange: function(fn) {
        if (isFunction(fn)) {            
            this.routeChangeListeners.push(fn);
        }
    },    
});

var Request = createClass("Request", {
    get: function(url, options) {
        return $.ajax({
            type: 'GET',
            url: url
        });
    }
});

var $loading = $(
    '<div id="yop-loading">' +
        '<svg class="spinner-container" width="65px" height="65px" viewBox="0 0 52 52">' +
            '<circle class="path" cx="26px" cy="26px" r="20px" fill="none" stroke-width="4px" />' +
        '</svg>' +
    '</div>'
);

/**
 * Pagelet class
 */
var Pagelet = createClass("Pagelet", {
    __init: function($dom) {        
        this.$dom = $dom;
        this.history = 0;

        $dom.html('');
        
        if (!isUndefined($dom.attr('yop-with-toolbar'))) {
            this.$toolbar = $('<div />').addClass('pagelet-toolbar');               
            this.$toolbar.css({
                position: 'relative',
                height: 51,
                borderBottom: '1px solid gray'
            });

            this.$prev = $('<div />').css({
                position: 'absolute',
                height : '100%',
                width : 32,
                display : 'flex',        
                alignItems : 'center',
                justifyContent : 'center',
                cursor: 'pointer',
            })
            .attr('title', 'Précédent')
            .html('<span class="fa fa-angle-left fa-2x"></span>')
            .on('click', function() {
                this.goBack();
            }.bind(this));
            
            this.$title = $('<div />').css({
                height: '100%',
                display : 'flex',        
                alignItems : 'center',
                paddingLeft: 48,
                fontSize: '20px'
            });

            this.$toolbar.append(this.$prev);
            this.$toolbar.append(this.$title);
            this.$dom.append(this.$toolbar);
        }
                                        
        this.$content = $('<div />').addClass('pagelet-content');             
        this.$content.height('100%').css({
            position: 'absolute',
            width: '100%',
        });
        this.$content.css('overflow', 'auto');
        
        if (!isUndefined($dom.attr('yop-with-toolbar'))) {
            this.$content.css('top', '51px');
        }

        this.$dom.append(this.$content);
        
        this.$loading = $('<div />').css({
            position: 'relative',
            height: '100%',
            width: '100%',
            background: 'rgab(255, 255, 255, 1)',
            zIndex: 999999,
        }).html(
            $loading.clone()
        );
    },

    showTitle: function(title) {
        document.title = title;
        
        if (this.$title) {
            this.$title.html(title);
        }
    },

    showContent: function(content) {
        this.$content.html(content);
        this.history++;
        Yop.handleOnDomListeners($(content));
    },

    showLoading: function() {
        this.$content.html(this.$loading);
    },

    hideLoading: function() {
        this.$content.html('');
    },

    showFailed: function() {
        // Nothing for now
    },

    goBack: function() {        
        if (this.history > 0) {
            global.history.go(-1);
            this.history--;
        }
    }
});

/**
 * Yop class
 */
var YopClass = createClass("YopClass",  {
    /**
     * Constructor
     * Instantiate core module (router, dispatcher, layout,...)
     */
    __init: function() {
        this.router = new Router();
        this.request = new Request();    
        this.history = {};
        this.onDomListeners = [];
    },

    mount: function(dom, initializer) {
        this.mountedOn = dom;

        this.handleLoadTag($(global.document));
        this.handlePopinTag($(global.document));
        this.createPopin();
        this.onDom(initializer);

        this.router.init();
        
        this.router.onRouteChange(function(route) {
            route.action = function() {
                this.load(route);
            }

            return route;

        }.bind(this));
    },

    onDom: function(fn) {
        if (isFunction(fn)) {
            this.onDomListeners.push(fn);
        }
    },

    load: function(route, pushState) {
        var yop = this;        
        var pagelet, $dom, at = route.at || route.pagelet || this.mountedOn;
        
        if (isUndefined(at)) {
            throw 'Can not load new page because you do not provide any mount point.\nCheck that you pass the "yop-at" attribute'
            return;
        }

        $dom = $(at).eq(0);
        pagelet = $dom.data('yop-pagelet');

        if (isUndefined(pagelet)) {
            pagelet = new Pagelet($dom);
            $dom.data('yop-pagelet', pagelet);
        }     

        if (!isUndefined(this.history[route.url])) {
            pagelet.showContent(this.history[route.url]);
            pagelet.showTitle(route.title);
        } else {
            pagelet.showLoading();
            this.request.get(route.url).done(function(html) {
                
                var $content = $(html);
                pagelet.hideLoading();
                pagelet.showContent($content);
                pagelet.showTitle(route.title);
                yop.history[route.url] = $content;

                if (isFunction(route.js)) {
                    route.js($content);
                } else if (isFunction(global[route.js])) {
                    global[route.js]($content);
                } else if (isString(route.js)) {
                    yop.injectScript(route.js);
                }

            }).fail(function() {
                pagelet.hideLoading();
                pagelet.showFailed();
            });
        }
    },

    popin: function(popin) {
        if (isUndefined(popin)) {
            this.$popin.modal('hide');
            return;
        }

        var yop = this;
        yop.$popin.find('.modal-title').text(popin.title || 'Popin');
        yop.$popin.find('.modal-dialog').removeClass('modal-sm modal-md modal-lg');
        
        if (isFunction(popin.cancelAction) || isFunction(popin.positiveAction)) {
            yop.$popin.find('.modal-footer').show();
            
            if (isFunction(popin.cancelAction)) {
                yop.$popin.find('#yop-popin-btn-cancel').off('click');
                yop.$popin.find('#yop-popin-btn-cancel').on('click', function(event) {
                    popin.cancelAction(event, $(this), yop.$popin);
                })
            }

            if (isFunction(popin.positiveAction)) {
                yop.$popin.find('#yop-popin-btn-positive').show().off('click');
                yop.$popin.find('#yop-popin-btn-positive').on('click', function(event) {
                    popin.positiveAction(event, $(this), yop.$popin);
                })
            } else {
                yop.$popin.find('#yop-popin-btn-positive').hide();
            }
            
        } else {
            yop.$popin.find('.modal-footer').hide();
        }
        
        switch(popin.size) {
            case 'small':
                yop.$popin.find('.modal-dialog').addClass('modal-sm');
                break;
            case 'medium':
                yop.$popin.find('.modal-dialog').addClass('modal-md');
                break;
            case 'large':
                yop.$popin.find('.modal-dialog').addClass('modal-lg');
                break;
        }
        
        yop.$popin.modal('show');                

        // if (!isUndefined(this.history[popin.url])) {
        //     yop.$popin.find('.modal-body').html(this.history[popin.url]);
        // } else {
            yop.$popin.find('.modal-body').css('position', 'relative').html($loading.clone());
            this.request.get(popin.url).done(function(html) {
                
                var $content = $(html);
                yop.$popin.find('.modal-body').html($content);
                // yop.history[popin.url] = $content;
                yop.handleOnDomListeners($content);
                if (isFunction(global[popin.js])) {
                    setTimeout(function() {
                        global[popin.js]($content, popin.$el);
                    }, 100);                    
                } else if (isString(popin.js)) {
                    yop.injectScript(popin.js);
                }

            }).fail(function() {
                yop.popin();
            });
        // }
    },

    handleOnDomListeners: function($dom) {
        this.handleLoadTag($dom);
        this.handlePopinTag($dom);
        for(var i in this.onDomListeners) {
            this.onDomListeners[i]($dom);
        }
    },

    handleLoadTag: function($dom) {
        var yop = this;

        $dom.find('[yop-load]').each(function() {
            var $this = $(this);
            var route = $this.data('yop-route');

            if (!route) {
                route = {};

                route.$el = $this;
                route.url = $this.attr('yop-load');
                route.at = $this.attr('yop-at');
                route.js = $this.attr('yop-js');
                
                route.title = $this.attr('yop-title');
                if (isBlank(route.title)) {
                    route.title = $this.attr('title');
                }

                $this.data('yop-route', route)
            }

            $this.on('click', function(event) {
                if (this.tagName.toLowerCase() === 'a') {
                    event.preventDefault();
                }                
                yop.load(route);
            });
        });
    },

    handlePopinTag: function($dom) {
        var yop = this;

        $dom.find('[yop-popin]').each(function() {
            var $this = $(this);
            var popin = $this.data('yop-popin');

            if (!popin) {
                popin = {};

                popin.$el = $this;
                popin.url = $this.attr('yop-popin');
                popin.js = $this.attr('yop-js');
                popin.title = $this.attr('yop-title');
                popin.size = $this.attr('yop-popin-size');
                popin.cancelAction = $this.attr('yop-popin-cancel');
                popin.positiveAction = $this.attr('yop-popin-positive');
                popin.cancelActionText = $this.attr('yop-popin-cancel-text');
                popin.positiveActionText = $this.attr('yop-popin-positive-text');
                if (isBlank(popin.title)) {
                    popin.title = $this.attr('title');
                }

                if (isBlank(popin.cancelActionText)) {
                    popin.cancelActionText = 'Annuler';
                }

                if (isFunction(global[popin.cancelAction])) {
                    popin.cancelAction = global[popin.cancelAction];
                } else {
                    popin.cancelAction = false;
                }

                if (isBlank(popin.positiveActionText)) {
                    popin.positiveActionText = 'Valider';
                }

                if (isFunction(global[popin.positiveAction])) {
                    popin.positiveAction = global[popin.positiveAction];
                } else {
                    popin.positiveAction = false;
                }

                $this.data('yop-popin', popin)
            }

            $this.on('click', function(event) {
                if (this.tagName.toLowerCase() === 'a') {
                    event.preventDefault();
                }
                
                yop.popin(popin);
            });
        });
    },

    createPopin: function() {
        if ($('#yop-popin').length != 0) {
            return;
        }
                        
        this.$popin = $(
            '<div id="yop-popin" class="modal fade" tabindex="-1" role="dialog">' +
                '<div class="modal-dialog" role="document">' +
                    '<div class="modal-content">' +
                        '<div class="modal-header">' +
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                            '<h4 class="modal-title"></h4>' +
                        '</div>' +
                        '<div class="modal-body"></div>' +
                        '<div class="modal-footer" style="display:none">' +
                            '<button id="yop-popin-btn-cancel" data-dismiss="modal" type="button" class="btn btn-default">Annuler</button>' +
                            '<button id="yop-popin-btn-positive" type="button" class="btn btn-primary">Valider</button>' +
                        '</div>' +
                    '</div>' +
                '</div>' +
            '</div>' 
        );
        
        this.$popin.find('.modal-body').css('min-height', '150px');
        $('body').eq(0).prepend(this.$popin);
    },

    /**
     * Inject js script
     */
    injectScript: function(js) {
        var script = document.createElement('script');
        script.type = 'text/javascript'
        script.src = js;
        script.async = true;
        document.getElementsByTagName('head')[0].appendChild(script);
    },

    //Backward compatibility
    Pagelet: function (params) {
        this.load(params);
    },

    Popin: function (params) {
        this.popin(params);
    }
});

return new YopClass();
});