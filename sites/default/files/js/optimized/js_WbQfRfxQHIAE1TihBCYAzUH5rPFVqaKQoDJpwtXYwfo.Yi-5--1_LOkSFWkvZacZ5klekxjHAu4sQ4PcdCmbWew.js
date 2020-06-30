(function($,Modernizr,Drupal){function CollapsibleDetails(node){this.$node=$(node);this.$node.data('details',this);var anchor=window.location.hash&&window.location.hash!=='#'?', '+window.location.hash:'';if(this.$node.find('.error'+anchor).length){this.$node.attr('open',true);}
this.setupSummary();this.setupLegend();}
$.extend(CollapsibleDetails,{instances:[]});$.extend(CollapsibleDetails.prototype,{setupSummary:function setupSummary(){this.$summary=$('<span class="summary"></span>');this.$node.on('summaryUpdated',$.proxy(this.onSummaryUpdated,this)).trigger('summaryUpdated');},setupLegend:function setupLegend(){var $legend=this.$node.find('> summary');$('<span class="details-summary-prefix visually-hidden"></span>').append(this.$node.attr('open')?Drupal.t('Hide'):Drupal.t('Show')).prependTo($legend).after(document.createTextNode(' '));$('<a class="details-title"></a>').attr('href','#'+this.$node.attr('id')).prepend($legend.contents()).appendTo($legend);$legend.append(this.$summary).on('click',$.proxy(this.onLegendClick,this));},onLegendClick:function onLegendClick(e){this.toggle();e.preventDefault();},onSummaryUpdated:function onSummaryUpdated(){var text=$.trim(this.$node.drupalGetSummary());this.$summary.html(text?' ('+text+')':'');},toggle:function toggle(){var _this=this;var isOpen=!!this.$node.attr('open');var $summaryPrefix=this.$node.find('> summary span.details-summary-prefix');if(isOpen){$summaryPrefix.html(Drupal.t('Show'));}else{$summaryPrefix.html(Drupal.t('Hide'));}
setTimeout(function(){_this.$node.attr('open',!isOpen);},0);}});Drupal.behaviors.collapse={attach:function attach(context){if(Modernizr.details){return;}
var $collapsibleDetails=$(context).find('details').once('collapse').addClass('collapse-processed');if($collapsibleDetails.length){for(var i=0;i<$collapsibleDetails.length;i++){CollapsibleDetails.instances.push(new CollapsibleDetails($collapsibleDetails[i]));}}}};var handleFragmentLinkClickOrHashChange=function handleFragmentLinkClickOrHashChange(e,$target){$target.parents('details').not('[open]').find('> summary').trigger('click');};$('body').on('formFragmentLinkClickOrHashChange.details',handleFragmentLinkClickOrHashChange);Drupal.CollapsibleDetails=CollapsibleDetails;})(jQuery,Modernizr,Drupal);