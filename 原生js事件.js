var EventUtil = {
  addHandler: function(element, type, handler) {
    if (element.addEventListener) {
      element.addEventListener(type, handler, false);
    } else if (element.attachEvent) {
      element.attachEvent("on" + type, handler);
    } else {
      element["on" + type] = handler;
    }
  },

  getEvent: function(event) {
    return event ? event : window.event;
  },

  getTarget: function(event) {
    return event.target || event.srcElement;
  },

  preventDefault: function(event) {
    if (event.preventDefault) {
      event.preventDefault();
    } else {
      event.returnValue = false;
    }
  },

  removeHandler: function(element, type, handler) {
    if (element.removeEventListener) {
      element.removeEventListener(type, handler, false);
    } else if (element.detachEvent) {
      element.detachEvent("on" + type, handler);
    } else {
      element["on" + type] = null;
    }
  },

  stopPropagation: function(event) {
    if (event.stopPropagation) {
      event.stopPropagation();
    } else {
      event.cancelBubble = true;
    }
  }
}

var targetArea = document.getElementById("targetArea");
if (document.attachEvent) {  // IE8
    window.onload = function() {
       bindClick(targetArea);
    }
} else {  // 其它浏览器
    EventUtil.addHandler(document, 'DOMContentLoaded', function(event) {
      bindClick(targetArea);
    });
}

function bindClick(targetArea) {
    EventUtil.addHandler(targetArea, "click", function(event) {
        event = EventUtil.getEvent(event);
        var target = EventUtil.getTarget(event);
        if (targen.className == 'targetClass') {
            // do some
        }
  });
}

// 手动触发事件
// ie
theDom_.fireEvent('onChange');

// 非ie
var event = new Event('change');
theDom_.dispatchEvent(event);
