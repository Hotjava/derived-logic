var dragManager = new function() {


  var dragObject = {};

  var self = this;

  function onMouseDown(e){
    e = fixEvent(e);

    if (e.which != 1) return;

    var elem = findDraggable(e);
    if (!elem) return;

    dragObject.elem = elem;

  
    dragObject.downX = e.pageX;
    dragObject.downY = e.pageY;

    return false;
  }

  function onMouseMove(e) {
    if (!dragObject.elem) return; 

    e = fixEvent(e);

    if ( !dragObject.avatar ) { 
      var moveX = e.pageX - dragObject.downX;
      var moveY = e.pageY - dragObject.downY;

    
      if ( Math.abs(moveX) < 3 && Math.abs(moveY) < 3 ) {        
        return;
      }

     
      dragObject.avatar = createAvatar(e); 
      if (!dragObject.avatar) { 
        dragObject = {};
        return;
      }

     
      var coords = getCoords(dragObject.avatar);
      dragObject.shiftX = dragObject.downX - coords.left;
      dragObject.shiftY = dragObject.downY - coords.top;

      startDrag(e); 
    }

  
    dragObject.avatar.style.left = e.pageX - dragObject.shiftX + 'px';
    dragObject.avatar.style.top = e.pageY - dragObject.shiftY + 'px';

    return false;
  }

  function onMouseUp(e) {
    if (dragObject.avatar) { 
      e = fixEvent(e);
      finishDrag(e);
    }

   
    dragObject = {};
  }

  function finishDrag(e) {
      var dropElem = findDroppable(e);
	
	 if (!dropElem) {
        self.onDragCancel(dragObject);
      } else {
        self.onDragEnd(dragObject, dropElem);
		}
  }

  function createAvatar(e) {
  
    
    var avatar = dragObject.elem;
    var old = {
      parent: avatar.parentNode,
      nextSibling: avatar.nextSibling,
      position: avatar.position || '',
      left: avatar.left || '',
      top: avatar.top || '',
      zIndex: avatar.zIndex || ''
    };

   
    avatar.rollback = function() {
      old.parent.insertBefore(avatar, old.nextSibling);
      avatar.style.position = old.position;
      avatar.style.left = old.left;
      avatar.style.top = old.top;
      avatar.style.zIndex = old.zIndex
    };

    return avatar;
  }

  function startDrag(e) {
    var avatar = dragObject.avatar;

    
    document.body.appendChild(avatar);
    avatar.style.zIndex = 9999;
    avatar.style.position = 'absolute';
  }

  function findDraggable(event) {
    var elem = event.target;
    while(elem != document && elem.getAttribute('draggable') == null) {
      elem = elem.parentNode;
    }
    return elem == document ? null : elem;
  }

  function findDroppable(event) {

    var elem = getElementUnderClientXY(dragObject.avatar, event.clientX, event.clientY);

    while(elem != document && elem.getAttribute('droppable') == null) {
      elem = elem.parentNode;
    }

    return elem == document ? null : elem;
  }

  document.onmousemove = onMouseMove;
  document.onmouseup = onMouseUp;
  document.onmousedown = onMouseDown;

  this.onDragEnd = function(dragObject, dropElem) { };
  this.onDragCancel = function(dragObject) { };

};
