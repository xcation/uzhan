/*!
 * SQ Framework
 *
 * @fileOverView 商圈基础框架
 * @copyright http://www.13980.com 2013
 * @author <a href="mailto:jeson@13980.com">Jeson</a>
 * @sq_release_version: 1.0.0
 * @sq_release_date: 20130828
 * 
 */
if(!window.SQ) {
	var SQ = {};
}

;(function(){

	SQ = function(selector){
		return new base(selector, arguments);
	};

	/**
	 * 配置
	 * @type {Object}
	 */
	SQ.conf = {

		/**
		 * 环境变量
		 * @type {Object.<string>}
		 * @constant
		 */
		ENV : {},

		/**
		 * 版本定义
		 * @type {Object.<string>}
		 * @constant
		 */
		VER : '1.0.0',

		/**
		 * 其他定义
		 * @type {Object.<string>}
		 * @constant
		 */
		BOX : {
			__NATIVE : {},
			__ANIMATE : {}
		}
		
	};

	var base = function(value, param){
		this.value = value;
		this.param = param;
	};

    base.prototype.get = function (type) {
        return this.value;
    };

	base.set = function(name){
		return function(){
			var selector = SQ.type(this.value), f, t, data = null;
			if(SQ.conf.BOX.__NATIVE[selector] && SQ.conf.BOX.__NATIVE[selector][name]){
				f = SQ.conf.BOX.__NATIVE[selector][name].f;
				t = SQ.conf.BOX.__NATIVE[selector][name].t;
			} else {
				return this;
			}
			if(typeof f == "function"){
				data = f.apply(this, arguments);
			} else {
				if(typeof this.value[name] == "function"){
					data = this.value[name].apply(this.value, arguments);
				} else {
					return this;
				}
			}
			if("get" == t) {
				return data;
			} else if("set" == t) {
				return this;
			} else if(data) {
				this.value = data;
			}
			return this;
		};
	};

	/**
	 * 自定义的Error报错方法
	 * @param {String} msg  错误信息
	 * @param {Number} code 错误代码
	 */
	SQ.Exception = function(msg, code) {
		var errstr = msg;
		if (code && (typeof code == "string" || typeof code == "number")) {
			errstr += " Errno: " + code;
		}
		console.log(errstr);
		//throw new Error(errstr);
	};

	/**
	 * 定义空函数
	 * @return {function} 空函数
	 */
	SQ.emptyFunction = function() {};
	
	SQ.object = {
		"typ" : new SQ.emptyFunction(),
		"str" : new SQ.emptyFunction(),
		"arr" : new SQ.emptyFunction(),
		"obj" : new SQ.emptyFunction(),
		"bol" : new SQ.emptyFunction(),
		"num" : new SQ.emptyFunction(),
		"dom" : new SQ.emptyFunction(),
		"win" : new SQ.emptyFunction(),
		"fun" : new SQ.emptyFunction(),
		"nul" : new SQ.emptyFunction()
	};
	
	SQ.type = function(name){
		var type = Object.prototype.toString.apply(name).toLowerCase();
		if(type.indexOf("html") != -1 
			|| (name && name.nodeType && name.tagName)
			|| (name && name.nodeName)
			|| (name && name.nodeType && name.nodeValue)
			|| (name == window)){
			return SQ.object.dom;
		}
		if(typeof name == "function"){
			return SQ.object.fun;
		}
		if(name === null || name === undefined){
			return SQ.object.nul;
		}
		switch(Object.prototype.toString.apply(name).toLowerCase()){
			case "[object string]":
				return SQ.object.str;
			case "[object array]":
				return SQ.object.arr;
			case "[object object]":
				return SQ.object.obj;
			case "[object boolean]":
				return SQ.object.bol;
			case "[object number]":
				return SQ.object.num;
			default:
				return SQ.object.win;
		}
	};

	SQ.extend = function(name, objType, funType, func){
		for(var i = 0; i < objType.length; ++i){
			if(!SQ.conf.BOX.__NATIVE[objType[i]]) {
				SQ.conf.BOX.__NATIVE[objType[i]] = {};
			}
			SQ.conf.BOX.__NATIVE[objType[i]][name] = {
				"t" : funType,
				"f" : func
			};
		}
		base.prototype[name] = base.set(name);
	};

	/**
	 * 判断数组
	 * @return {boolean}
	 */
	SQ.isArray = function(obj) {
		return Object.prototype.toString.call(obj) === '[object Array]';
	};

	/**
	 * 判断数组
	 * @return {boolean}
	 */
	SQ.query = function(elem) {
        if (typeof elem !== "string") {
            return [elem];
        }
		var dom = KISSY.DOM.query(elem);
		if(dom.length == 1) {
			return dom;
		}
        return [dom];
	};

	SQ.bind = function(fn, scope){
		var param = [];
		for (var i = 2; i < arguments.length; ++i) {
			param.push(arguments[i]);
		}
		return function() {
			return fn.apply(scope, param);
		};
	};

    SQ.bindEvent = function (el, evt, callback, context) {
        if (el.addEventListener) {
            el.addEventListener(evt, callback, context);
            return;
        } else if (el.attachEvent) {
            el.attachEvent('on' + evt, callback);
            return;
        } else {
            el['on' + evt] = callback;
			return;
        }
    };

    SQ.removeEvent = function (el, evt, callback) {
        if (el.removeEventListener) {
            el.removeEventListener(evt, callback, false);
        } else if (el.detachEvent) {
            el.detachEvent('on' + evt, callback);
        } else {}
    };

    SQ.hasClass = function (el, name) {
        var className = "" + SQ.query(el)[0].className;
        var arr = className.split(/\s+/);
        for (var i = 0; i < arr.length; ++i) {
            if (arr[i] == name) {
                return true;
            }
        }
        return false;
    };

    SQ.addClass = function (el, name) {
        var className = "" + el.className;
        var arr = className.split(/\s+/);
        arr.push(name);
        el.className = arr.join(" ");
    };

    SQ.removeClass = function (el, name) {
        var className = "" + el.className;
        var arr = className.split(/\s+/);
        for (var i = arr.length - 1; i >= 0; --i) {
            if (arr[i] == name) {
                arr.splice(i, 1);
                break;
            }
        }
        el.className = arr.join(" ");
    };

    SQ.getCurPos = function (evt) {
        evt = evt || window.event;
        var dom = document.documentElement;
        if (evt.pageX) {
            return {
                "x": evt.pageX,
                "y": evt.pageY
            };
        }
        return {
            "x": evt.clientX + dom.scrollLeft - dom.clientLeft,
            "y": evt.clientY + dom.scrollTop - dom.clientTop
        };
    };

	SQ.getObjPos = function(el, bFixed) {
		var el = SQ.query(el)[0];
		var x = 0;
		var y = 0;
		if (!bFixed && el.getBoundingClientRect) {
			var box = el.getBoundingClientRect();
			var dom = document.documentElement;
			x = box.left + Math.max(dom.scrollLeft, document.body.scrollLeft) - dom.clientLeft;
			y = box.top + Math.max(dom.scrollTop, document.body.scrollTop) - dom.clientTop;
		} else {
			for (; el != document.body; el = el.offsetParent) {
				if (bFixed && (el.style.position.toLowerCase() == "fixed" || el.style.position.toLowerCase() == "absolute")) {
					break;
				}
				x += el.offsetLeft;
				y += el.offsetTop;
			}
		}
		return {
			"x": x,
			"y": y
		};
	};

    SQ.isMouseIn = function (e, el) {
        var c = SQ.getCurPos(e);
        var p = SQ.getObjPos(el);
        if (c.x >= p.x && c.x <= p.x + el.offsetWidth && c.y >= p.y && c.y <= p.y + el.offsetHeight) {
            return true;
        }
        return false;
    };

    SQ.getScrollTop = function () {
        return window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
    };
    SQ.getScrollLeft = function () {
        return window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft;
    };
    SQ.getClientHeight = function () {
        return (document.compatMode == "CSS1Compat") ? document.documentElement.clientHeight : document.body.clientHeight;
    };
    SQ.getClientWidth = function () {
        return (document.compatMode == "CSS1Compat") ? document.documentElement.clientWidth : document.body.clientWidth;
    };
    SQ.getScrollWidth = function () {
        return (document.compatMode == "CSS1Compat") ? document.documentElement.scrollWidth : document.body.scrollWidth;
    };
    SQ.getScrollHeight = function () {
        return (document.compatMode == "CSS1Compat") ? document.documentElement.scrollHeight : document.body.scrollHeight;
    };

	SQ.hideSetinterval = null;
	SQ.showSetinterval = null;
	SQ.showTimeout = function(obj,fn) {
		if (SQ.hideSetinterval) {
			window.clearTimeout(SQ.hideSetinterval);
		}
		if (SQ.showSetinterval) {
			window.clearTimeout(SQ.showSetinterval);
		}
		if (obj) {
			SQ.showSetinterval = window.setTimeout(SQ.bind(fn, this, obj), 100);
		}
	};

	SQ.hideTimeout = function(e,fn2) {
		if (SQ.showSetinterval) {
			window.clearTimeout(SQ.showSetinterval);
		}
		SQ._container = SQ.query('.modal')[0];
		if (SQ._container && SQ._container.style.display != 'none' && !SQ.isMouseIn(e, SQ._container)) {
			if (SQ.hideSetinterval) {
				window.clearTimeout(SQ.hideSetinterval);
			}
			if( fn2 == undefined ){
				SQ.hideSetinterval = window.setTimeout(function () {
					SQ._container.style.display = 'none';
				}, 100);
			} else {
				SQ.hideSetinterval = window.setTimeout(SQ.bind(fn2, this), 100);
			}
		}
	};

	var userAgent = navigator.userAgent.toLowerCase();

	SQ.browser = {
		version: (userAgent.match(/(?:rv|it|ra|ie)[\/: ]([\d.]+)/) || [])[1],
		webkit: /webkit/.test(userAgent),
		chrome: /chrome/.test(userAgent),
		opera: /opera/.test(userAgent),
		ie: /msie/.test(userAgent) && !/opera/.test(userAgent),
		mozilla: /mozilla/.test(userAgent) && !/(compatible|webkit)/.test(userAgent),
		firefox: /firefox\/(\d+\.\d)/i.test(userAgent),
		safari: /safari/.test(userAgent)
	};

    SQ.style = function (el, styleName, styleValue) {
        if (typeof styleValue != "undefined") {
            try {
                el.style[styleName] = styleValue;
            } catch (e) {
                SQ.Exception("error", "setcss", styleName, styleValue);
            }
        }
        if (styleName.toLowerCase() == "opacity" && SQ.browser.ie) {
            if (SQ.type(styleValue) == SQ.object.num) {
                var style = el.style;
                style.filter = (style.filter || "").replace(/alpha\([^\)]*\)/gi, "") + (styleValue == 1 ? "" : "alpha(opacity=" + styleValue * 100 + ")");
                style.zoom = 1;
            }
            var filter = el.style.filter;
            return filter && filter.indexOf("opacity=") >= 0 ? (parseFloat(filter.match(/opacity=([^)]*)/)[1]) / 100) + "" : "1";
        }
        return el.style[styleName];
    };

	SQ.alert = function(value) {
		console.log(value);
	};

	/**
	 * 定义动画效果
	 * @return {object}
	 */

    var animate = function () {
            this.timeStamp = 20;
            this.animationList = [];
            this.index = 0;
    };

    animate.prototype.step = function () {
        var anyGuyInUse = false;
        for (var i = 0; i < this.animationList.length; ++i) {
            if (this.animationList[i] && !this.animationList[i].finished && !this.animationList[i].paused) {
                this.animationList[i].step(this.timeStamp);
                anyGuyInUse = true;
            }
        }
        if (!anyGuyInUse) {
            clearInterval(this.loop);
            this.loop = null;
        }
    };

    animate.prototype.start = function () {
        if (this.loop) return;
        var me = this;
        this.loop = setInterval(function () {
            me.step();
        }, this.timeStamp);
    };

    animate.prototype.setTime = function (time) {
        if (this.loop) {
            clearInterval(this.loop);
            this.loop = null;
        }
        this.timeStamp = time;
        this.start();
    };

    animate.prototype.reg = function (name, fun) {
        SQ.conf.BOX.__ANIMATE[name] = fun;
    };

    animate.prototype.action = function (ani) {
        this.animationList[this.index] = new aniInstance(ani, this.timeStamp);
        this.start();
        return this.animationList[this.index++];
    };

    var aniInstance = function (ani, time) {
        this.paused = false;
        this.finished = false;
        this.currentTime = 0;
        if (!ani.time) {
            ani.time = 0;
        }
        this.config = ani;
        this.action = aniInstance.getAction(ani, time);
        if (this.action == null) {
            this.finished = true;
        }
    };

    aniInstance.prototype = {
        pause: function () {
            this.paused = true;
        },
        resume: function () {
            this.paused = true;
            SQ.animate.start();
        },
        step: function (time) {
            this.currentTime += time;
            if (this.currentTime >= this.config.time) {
                this.finished = true;
                this.action.end();
                if (typeof this.config.callback == "function") {
                    this.config.callback();
                }
            } else {
                this.action.doIt();
            }
        }
    };

    aniInstance.getAction = function (ani, time) {
        if (!ani.prop || !SQ.conf.BOX.__ANIMATE[ani.prop]) return null;
        return SQ.conf.BOX.__ANIMATE[ani.prop](ani, time);
    };

    SQ.animate = new animate();

	/**
	 * 获取默认的业务流
	 * @return {object} 业务流默认的一些方法
	 */
	var _getDefaultProcess = function() {
		return {
			start:     SQ.emptyFunction,
			end:       SQ.emptyFunction,
			checkSucc: SQ.emptyFunction,
			succ:      SQ.emptyFunction,
			fail:      SQ.emptyFunction,
			next:      SQ.emptyFunction,
			prev:      SQ.emptyFunction,
			options:   SQ.emptyFunction
		};
	};

	/**
	 * 作为widget的初始化的类
	 * @param  {String} name       Widget的名称
	 * @param  {Function} init     初始化函数
	 * @param  {Function} run      初始化widget完毕后运行
	 * @param  {Object} params     参数
	 * @param  {Object} interfaces 对外的接口
	 * @param  {Object} events     需要绑定的事件
	 * @param  {Object} notifies   提供给Children使用的方法
	 * @param  {Object} notifyTo   传递通知的对象
	 * @param  {Object} inherit    传递继承自的对象
	 * @return {Object}            返回一个Widget类
	 */
	var widget = function(name, init, run, params, interfaces, events, notifies, process, notifyTo, inherit) {
		// 管理所有内部的elements
		this.node = {};
		// 管理内部的事件响应
		this.events = {};
		// 管理内部提供给children的方法
		this.notifies = {};
		// 业务流需要的方法
		this.process = _getDefaultProcess();
		// 继承
		this._super = {};

		// 设置notifyTo
		if (notifyTo) this.setNotifyTo(notifyTo);

		this.extend(inherit);
		widget.extendMethod.call(this, interfaces, events, notifies, process, init, params);
		if (typeof run == "function") {
			run.apply(this, params);
		}
	};

	// 自定义的一些events储存在这里
	widget.customizedEvents = {};

	// 注册好了的widget储存在这里
	widget.store = {};

	widget.tmpDiv = document.createElement("div");


	widget.extendMethod = function(interfaces, events, notifies, process, init, params, bExtend) {
		for (var s in events) {
			this.events[s] = events[s];
		}
		var _makeFunction = function(collection, funName) {
				var me = this;
				return function() {
					return collection[funName].apply(me, arguments);
				};
			};
		for (var funName in interfaces) {
			if (typeof interfaces[funName] == "function") {
				if (!this[funName] || !bExtend)
					this[funName] = _makeFunction.call(this, interfaces, funName);
				if (bExtend)
					this._super[funName] = _makeFunction.call(this, interfaces, funName);
			}
		}
		for (var funName in notifies) {
			if (typeof notifies[funName] == "function") {
				this.notifies[funName] = _makeFunction.call(this, notifies, funName);
			}
		}

		if (!bExtend) {
			for (var funName in process) {
				if (typeof process[funName] == "function") {
					this.process[funName] = _makeFunction.call(this, process, funName);
				}
			}	
		}

		if (typeof init == "function") {
			init.apply(this, params);
		}
	};

	widget.getEvents = function(action, el, nodes) {
		var me = this;
		if (!nodes) {
			nodes = this.node;
		}
		if (typeof this.events[action] == "function") {
			return function(e) {
				return !(me.events[action].call(me, e, el, nodes) === false);
			}
		}
		return null;
	};

	widget.addEvent = function(el, evt, callback, nodes) {
		if (el.addEventListener) {
			el.addEventListener(evt, callback, nodes);
			return;
		} else if (el.attachEvent) {
			el.attachEvent('on' + evt, callback);
			return;
		} else {
			el['on' + evt] = callback;
			return;
		}
	};

	widget.bindEvents = function(el, evt, action, nodes) {
		evt = evt.toLowerCase();
		var callback = widget.getEvents.call(this, action, el, nodes);
		if (callback) {
			widget.addEvent(el, evt, callback);
		}
	};

	widget.bindCustomizedEvents = function(el, evt, param, nodes) {
		if (typeof widget.customizedEvents[evt] == "function") {
			if (!nodes) nodes = this.node;
			widget.customizedEvents[evt].call(this, el, param, nodes);
		}
	};

	
	widget.getWidgetConfig = function(name) {
		var ret = widget.store[name];
		if (!ret) {
			SQ.Exception(name + " is not registered");
			return false;
		}
		if (!ret.interfaces) ret.interfaces = {};
		if (!ret.events) ret.events = {};
		if (!ret.notifies) ret.notifies = {};
		if (!ret.process) ret.process = _getDefaultProcess();
		return ret;
	};

	widget.emNode = function(node, nodes, group) {
		if (group) {
			group.node = {};
		} else {
			group = this;
		}
		if (!nodes) {
			try {
				nodes = node.getElementsByTagName("em");
			} catch (e) {
				SQ.Exception("no nodes specified!");
				return;
			}
		}
		var toBind = [];
		for (var i = 0; nodes && i < nodes.length; ++i) {
			var text = nodes[i].getAttribute("data-attr");
			if (text && typeof text == "string") {
				var arr = text.split(";"),
					el = nodes[i];
				for (var j = 0; j < arr.length; ++j) {
					var t = arr[j].split(":");
					if (1 == t.length && t[0]) {
						group.node[t[0]] = el;
					}
					if (2 == t.length) {
						if ("inner" == t[0]) {
							group.node[t[1]] = el;
						} else {
							// 处理完元素element相关内容，开始处理events和customizedEvents
							toBind.push({
								el: el,
								key: t[0],
								value: t[1]
							});
						}
					}
				}
			}
		}
		for (var i = 0; i < toBind.length; ++i) {
			widget.bindEvents.call(this, toBind[i].el, toBind[i].key, toBind[i].value, group);
			widget.bindCustomizedEvents.call(this, toBind[i].el, toBind[i].key, toBind[i].value, group);
		}
	};

	widget.setNotifyTo = function(obj) {
		if (!obj._notifyMembers) obj._notifyMembers = [];
		obj._notifyMembers.push(this);
		this._notifyTo = obj;
		return this;
	};

	widget.notify = function(type) {
		var param = [];
		for (var i = 1; i < arguments.length; ++i) {
			param.push(arguments[i]);
		}
		var notifyTo = this._notifyTo;
		while (notifyTo) {
			if (notifyTo.notifies && typeof notifyTo.notifies[type] == "function") {
				return notifyTo.notifies[type].apply(notifyTo, param);
			}
			notifyTo = notifyTo._notifyTo;
		}
	};

	widget.extend = function(p, params) {
		if (typeof p == "string") p = [p];
		if (!SQ.isArray(p)) return this;
		if (!SQ.isArray(params)) params = [params];

		for (var i = 0; i < p.length; ++i) {
			var c = widget.getWidgetConfig(p[i]);
			if (!c) continue;
			widget.extendMethod.call(this, c.interfaces, c.events, c.notifies, c.process, c.init, params, true);
		}
		return this;
	};

	widget.enableNode = function(node, group){
		if (!node) return;
		var attrs = [],
			children = node.childNodes;
		if (children && children.length) {
			for (var i = 0; i < children.length; ++i) {
				attrs.push(children[i]);
			}
		}
		attrs.push(node);
		this.emNode(node, attrs, group);
	};

	widget.domOperation = function(type, node, str, conf, group, bNoEnable) {
		if (typeof node == "string") node = SQ.query("#" + node)[0];
		if (!node) return;

		str = (""+str).replace(/\$(\w+)\$/g, function(a, b) {
			return typeof conf[b] != "undefined" ? conf[b] : "$" + b + "$"
		});
		widget.tmpDiv.innerHTML = '';
		SQ(widget.tmpDiv).appendHTML(str, {});
		if (!bNoEnable) {
			this.enableNode(widget.tmpDiv, group);
		}

		var childNodes = widget.tmpDiv.childNodes;
		if(node){
			switch (type) {
				case "append":
					node.appendChild(childNodes[0]);
				break;
				case "after":
					while(childNodes.length){
						node.appendChild(childNodes[0]);
					}
				break;
				case "before":
					while(childNodes.length){
						node.insertBefore(childNodes[0],null);
					}
				break;
			}
			
		}
	};

	widget.append = function(node, str, conf, group, bNoEnable) {
		widget.domOperation.call(this, "append", node, str, conf, group, bNoEnable);
	};

	widget.after = function(node, str, conf, group, bNoEnable) {
		widget.domOperation.call(this, "after", node, str, conf, group, bNoEnable);
	};

	widget.before = function(node, str, conf, group, bNoEnable) {
		widget.domOperation.call(this, "before", node, str, conf, group, bNoEnable);
	};

	widget.prototype = {
		// 这4个方法是最最基础的方法
		setNotifyTo: widget.setNotifyTo,
		extend: widget.extend,
		notify: widget.notify,
		emNode: widget.emNode,
		// 以下的方法都是基于上面的方法实现出来的
		enableNode: widget.enableNode,
		append: widget.append,
		after: widget.after,
		before: widget.before
	};

	SQ.widgetExtention = function() {
		SQ.widget.addWidgetFunc("appendHTML", function(str, node, conf, group) {
			this.append(node, str, conf, group);
		});
	};

	SQ.widget = {
		_bExtended: false,

		addWidgetFunc: function(name, func) {
			widget.prototype[name] = func;
		},

		addCustomizedEvents: function(name, func) {
			widget.customizedEvents[name] = func;
		},

		loadExtention: function() {
			if (this._bExtended) {
				return;
			}
			SQ.widgetExtention();
			this._bExtended = true;
		},

		add: function(param) {
			if (typeof param == "string") {
				param = {
					name: param
				};
			}
			var obj = widget.getWidgetConfig(param.name),
				params = [];
			if (!obj) {
				SQ.Exception(param.name + " is not registered");
				return;
			}
			for (var i = 1; i < arguments.length; ++i) {
				params.push(arguments[i]);
			}

			var el = new widget(
				param.name,
				obj.init,
				obj.run,
				params,
				obj.interfaces,
				obj.events,
				obj.notifies,
				obj.process,
				param && param.notifyTo,
				param && param.extend
			);
			return el;
		},

		reg: function(name, obj) {
			widget.store[name] = obj;
		}
	};
	SQ.widget.loadExtention();
})()

;(function(){
	var option = {
		bindEvent : []
	};
    var _createEventCall = function (el, func, evt, param) {
            el = SQ.query(el)[0];
            var arr = [""];
            for (var i = 1; i < param.length; ++i) {
                arr.push(param[i]);
            }
            var fun = function (e) {
                    arr[0] = e;
                    return func.apply(el, arr);
                };
            option.bindEvent.push({
                fun: func,
                el: el,
                evt: evt,
                fn: fun
            });
            SQ.bindEvent(el, evt, fun);
    };

    var _removeEventCall = function (el, func, evt) {
            d.bindE = SQ(option.bindEvent).removeEmpty(function (item) {
                if (item.evt == evt && item.el == el) {
                    if (!func || func == item.fun) {
                        SQ.removeEvent(el, evt, item.fn);
                        return true;
                    }
                }
                return false;
            });
    };

    SQ.extend("contain", [SQ.object.arr], "get", function (str) {
        for (var i = 0; i < this.value.length; ++i) {
            if (this.value[i] == str) {
                return true;
            }
        }
        return false;
    });

    SQ.extend("removeEmpty", [SQ.object.arr], "get", function (fn) {
        var value = this.value,
            ret = [];
        for (var i = 0; i < value.length; ++i) {
            if (!fn(value[i])) {
                ret.push(value[i]);
            }
        };
        return ret;
    });

    SQ.extend("hasClass", [SQ.object.str, SQ.object.dom], "get", function (name) {
        return SQ.hasClass(this.value, name);
    });

    SQ.extend("removeClass", [SQ.object.str, SQ.object.dom], "set", function (name) {
       var el = SQ.query(this.value)[0];
        while (SQ.hasClass(el, name)) {
            SQ.removeClass(el, name);
        }
        return el;
    });
    SQ.extend("addClass", [SQ.object.str, SQ.object.dom], "set", function (name) {
        var el = SQ.query(this.value)[0];
        SQ.addClass(el, name);
        return el;
    });

    SQ.extend("setCss", [SQ.object.str, SQ.object.dom], "set", function (styleName, styleValue) {
        var el = SQ.query(this.value)[0];
        SQ.style(el, styleName, styleValue);
        return el;
    });

    SQ.extend("getCss", [SQ.object.str, SQ.object.dom], "get", function (styleName) {
		var el = SQ.query(this.value)[0];
        return SQ.style(el, styleName);
    });

    SQ.extend("show", [SQ.object.dom, SQ.object.str], "set", function () {
        this.setCss("display", "block");
    });

    SQ.extend("hide", [SQ.object.dom, SQ.object.str], "set", function () {
        this.setCss("display", "none");
    });

    SQ.extend("resize", [SQ.object.dom, SQ.object.str], "set", function (func) {
        _createEventCall(this.value, func, "resize", arguments);
    });

    SQ.extend("click", [SQ.object.dom, SQ.object.str], "set", function (func) {
        _createEventCall(this.value, func, "click", arguments);
    });

    SQ.extend("mouseover", [SQ.object.dom, SQ.object.str], "set", function (func) {
        _createEventCall(this.value, func, "mouseover", arguments);
    });
    SQ.extend("unMouseover", [SQ.object.dom, SQ.object.str], "set", function (func) {
        _createEventCall(this.value, func, "mouseover");
    });
    SQ.extend("mouseout", [SQ.object.dom, SQ.object.str], "set", function (func) {
        _createEventCall(this.value, func, "mouseout", arguments);
    });
    SQ.extend("unMouseout", [SQ.object.dom, SQ.object.str], "set", function (func) {
        _createEventCall(this.value, func, "mouseout");
    });

    SQ.extend("each", [SQ.object.dom], "set", function (func) {
        for (var index in this.value) {
            func(this.value[index], index);
        }
    });

    SQ.extend("remove", [SQ.object.dom, SQ.object.str], "set", function () {
        var el = SQ.query(this.value)[0];
        if (el.parentNode) {
            el.parentNode.removeChild(el);
        }
    });

    SQ.extend("position", [SQ.object.dom, SQ.object.str], "get", function () {
        this.getCss("position");
    });

    SQ.extend("appendHTML", [SQ.object.dom, SQ.object.str], "set", function (str, con) {
        var parent = SQ.query(this.value)[0];
        if (con) {
            for (var s in con) {
                var reg = new RegExp("\\$" + s + "\\$", "gi");
                var reg1 = new RegExp("\\$", "gi");
                var tmp = ("" + con[s]).replace(reg1, "[`^DOLLAR^`]");
                str = str.replace(reg, tmp);
            }
        }
        var reg2 = new RegExp("\\[`\\^DOLLAR\\^`\\]", "g");
        str = ("" + str).replace(reg2, "$");
        parent.innerHTML += str;
    });

	SQ.extend("popup", [SQ.object.dom, SQ.object.str], "get", function (f1,f2) {
		var el = SQ.query(this.value)[0];
		SQ.bindEvent(el, 'mouseover', function (e) {
				SQ.showTimeout(el,f1);
		});

		SQ.bindEvent(el, 'mouseout', function (e) {
			if( f2 == undefined ){
				SQ.hideTimeout(e);
			} else {
				SQ.hideTimeout(e,f2);
			}
		});
		return;
	});

    SQ.animate.reg("opacity", function (ani, time) {
        SQ(ani.el).setCss("opacity", ani.from);
        ani.curr = ani.from;
        ani.increse = (ani.to - ani.from) * time / (ani.time - time);
        var _do = function () {
                ani.curr += ani.increse;
				if(ani.curr > 1) {
					ani.curr = 1;
				}
                SQ(ani.el).setCss("opacity", ani.curr);
            };
        var _end = function () {
                SQ(ani.el).setCss("opacity", ani.to);
            };
        return {
            "doIt": _do,
            "end": _end
        };
    });

})()

;(function(){
	var init = function(){
		// 导航
		this.NAV = SQ.widget.add({
			name : "SQ.ui.nav",
			notifyTo : this
		});

		// 橱窗
		this.SHOWCASE = SQ.widget.add({
			name : "SQ.ui.showcase",
			notifyTo : this
		});

		// 个人中心
		this.PROFILE = SQ.widget.add({
			name : "SQ.ui.profile",
			notifyTo : this
		});
	};
	SQ.widget.reg("SQ.ui", {
		init : init
	});
})()

// 弹出框
;(function(){
	var template = [
		'<div class="global-dialog">',
			'<table class="global-dialog-wrapper clearfix r5">',
				'<tr>',
					'<td>',
						'<div class="global-dialog-header">',
							'<span class="global-dialog-title">信息提示</span>',
							'<span class="global-dialog-close">×</span>',
						'</div>',
						'<div class="global-dialog-content">$content$</div>',
					'</td>',
				'</tr>',
			'</table>',
		'</div>'
	].join('');
	var overlay = [
		'<div class="global-dialog-overlay"></div>'
	].join('');
	var init = function(){

	};
	
	var show = function(content) {
		this.appendHTML(template, document.body,{content : content});
		this.appendHTML(overlay, document.body);
		SQ('.global-dialog-close').click(function(){
			SQ('.global-dialog').remove();
			SQ('.global-dialog-overlay').remove();
		});
		SQ('.global-dialog').setCss('top', 300 + 'px').setCss('left', ((document.documentElement.clientWidth - 640) / 2) + 'px');
		SQ('.global-dialog').show();
		return this;
	};

	SQ.widget.reg("SQ.ui.dialog", {
		interfaces : {
			show : show
		},
		init : init
	});
})()

// 商圈导航
;(function(){
	var init = function(){
		var NAV = SQ('#nav');
		GS.addListener('windowScroll',function(e){
			if(e.scrollTop >= 450) {
				if(!NAV.hasClass('nav-fixed')) {
					NAV.addClass('nav-fixed');
				}
			} else {
				NAV.removeClass('nav-fixed');
			}
		});
	};
	SQ.widget.reg("SQ.ui.nav", {
		init : init
	});
})()

// 商圈橱窗
;(function(){
	var template = [
		'<div class="modal">',
			'<div>',
				'<img attr="click:aaa" src="/assets/images/img7.jpg" width="210" height="80" /></div>',
			'<div>',
				'<img attr="click:aaa1" src="/assets/images/img7.jpg" width="210" height="80" /></div>',
			'<div>',
				'<img attr="click:aaa2" src="/assets/images/img7.jpg" width="210" height="80" /></div>',
			'<div class="box-sel-info">',
				'<p>',
					'<span class="name">店铺名称：</span>红袖影江南服饰</p>',
				'<p>正有<span class="num">999999</span>个顾客正在浏览这个店铺</p>',
			'</div>',
		'</div>'
	].join('');
	var init = function(){
		this.appendHTML(template, document.body);
		SQ.bindEvent(SQ.query('.modal')[0], 'mouseout', function (e) {
			SQ.hideTimeout(e,hide);
		});
		SQ(SQ.query('.box-info')[0]).each(function(item) {
			SQ(item).popup(function(){
				show.call(this, item);
			},function(){
				hide.call(this);
			});
		});
	};

	var show = function(node) {
		var idx = node.getAttribute('class').replace('box-info box', '');
		var pos = node.getBoundingClientRect();
		SQ('.modal').setCss('top', pos.top + 'px').setCss('left', pos.left + node.clientWidth + 'px');
        SQ.animate.action({
            el: SQ.query('.modal')[0],
            from: 0,
            to: 1,
            prop: "opacity",
            time: 200,
            callback: function() {}
        });
	};

	var hide = function() {
		SQ('.modal').setCss('opacity', 0);
	};

	SQ.widget.reg("SQ.ui.showcase", {
		init : init
	});
})()

;(function (){
	window.onload = function(){
		SQ.widget.add('SQ.ui');
	};
})()

// 个人中心
;(function(){
	var init = function(){
		var dialog = null;
		SQ('.profile').click(function(){
			// 弹出框
			dialog = SQ.widget.add({
				name : "SQ.ui.dialog",
				notifyTo : this
			});
			dialog.show('<div class="submit-profile"><button type="button" class="button-profile">提交</button></div>');
			SQ('.button-profile').click(function(){
				SQ.alert('ddd');
			});
		});
	};
	
	SQ.widget.reg("SQ.ui.profile", {
		init : init
	});
})()






