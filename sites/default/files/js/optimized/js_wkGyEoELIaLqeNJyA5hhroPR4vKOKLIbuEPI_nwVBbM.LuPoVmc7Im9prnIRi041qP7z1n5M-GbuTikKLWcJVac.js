(function($,Drupal,drupalSettings){Drupal.behaviors.betterExposedFilters={attach:function(context,settings){$('.bef-tree input[type=checkbox], .bef-checkboxes input[type=checkbox]').change(function(){_bef_highlight(this,context);}).filter(':checked').closest('.form-item',context).addClass('highlight');}};function _bef_highlight(elem,context){$elem=$(elem,context);$elem.attr('checked')?$elem.closest('.form-item',context).addClass('highlight'):$elem.closest('.form-item',context).removeClass('highlight');}})(jQuery,Drupal,drupalSettings);