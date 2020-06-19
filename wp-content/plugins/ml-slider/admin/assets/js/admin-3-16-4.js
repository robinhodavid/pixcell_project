window.jQuery(function(e){const t=window.metaslider.app?window.metaslider.app.MetaSlider:null;var i={loaded:!1,attach_event:function(e){var t=e.state().get("library");e.listenTo(t,"change",function(e){i.update_slide_metadata({id:e.get("id"),caption:e.get("caption"),description:e.get("description"),title:e.get("title"),alt:e.get("alt")})})},update_slide_metadata:function(t){var i=e(".slide").filter(function(i){return e(this).data("attachment-id")===t.id}),a=i.map(function(){return this.id.replace("slide-","")});e(document).trigger("metaslider/image-meta-updated",[a.toArray(),t]),t.title?e(".title .default",i).html(t.title):e(".title .default",i).html("&nbsp;"),t.alt?e(".alt .default",i).html(t.alt):e(".alt .default",i).html("&nbsp;")}},a=window.create_slides=wp.media.frames.file_frame=wp.media({multiple:"add",frame:"post",library:{type:"image"}}),d=["insert","iframe"],s=a.states.models.filter(function(e){var t=e.id;return!d.filter(function(e){return t.includes(e)}).length});a.states.remove(s),a.on("insert",function(){var i=[];a.state().get("selection").map(function(e){i.push(e.toJSON().id)}),t&&t.notifyInfo("metaslider/creating-slides",t.sprintf(t._n("Preparing %s slide...","Preparing %s slides...",i.length,"ml-slider"),i.length),!0),o();var d={action:"create_image_slide",slider_id:window.parent.metaslider_slider_id,selection:i,_wpnonce:metaslider.create_slide_nonce};e.ajax({url:metaslider.ajaxurl,data:d,type:"POST",error:function(e){t&&t.notifyError("metaslider/slide-create-failed",e,!0)},success:function(a){a.data.forEach(function(t){var i=window.metaslider.app.Vue.compile(t.html);e("#metaslider-slides-list > tbody").append(new window.metaslider.app.Vue({render:i.render,staticRenderFns:i.staticRenderFns}).$mount().$el)}),setTimeout(function(){t&&t.notifySuccess("metaslider/slides-created",t.sprintf(t._n("%s slide added successfully","%s slides added successfully",i.length,"ml-slider"),i.length),!0),setTimeout(function(){t&&t.triggerEvent("metaslider/save")},1e3)},1e3)}})}),a.on("attach",function(){i.loaded||i.attach_event(a)}),a.on("open activate uploader:ready",function(){e('.media-menu a:contains("Media Library")').remove(),r(),s.forEach(function(t){e("#menu-item-"+t.id).remove()})}),t&&a.on("open",function(){t.notifyInfo("metaslider/add-slide-opening-ui",t.__("Opening add slide UI...","ml-slider"))}),t&&a.on("deactivate close",function(){t.notifyInfo("metaslider/add-slide-closing-ui",t.__("Closing add slide UI...","ml-slider")),o()}),e(".metaslider").on("change",".js-inherit-from-image",function(t){var i=e(this),a=i.parents(".can-inherit"),d=a.children("textarea,input[type=text]"),s=a.children(".default");i.is(":checked")?a.addClass("inherit-from-image"):(a.removeClass("inherit-from-image"),d.focus(),""===d.val()&&0===s.find(".no-content").length&&d.val(s.html()))});var l;e(".metaslider").on("click",".update-image",function(d){d.preventDefault();var s=e(this),n=s.data("attachment-id");l=window.update_slide_frame=wp.media.frames.file_frame=wp.media({title:MetaSlider_Helpers.capitalize(metaslider.update_image),library:{type:"image"},button:{text:MetaSlider_Helpers.capitalize(s.attr("data-button-text"))}}),l.on("open",function(){if(n){var e=l.state().get("selection");e.reset([wp.media.attachment(n)]),r(s.data("slideType"),s.data("slideId"))}}),l.on("attach",function(){i.loaded||i.attach_event(l)}),l.open(),l.on("select",function(){var a=l.state().get("selection");a.map(function(e){e=e.toJSON(),new_image_id=e.id,selected_item=e}),t&&t.notifyInfo("metaslider/updating-slide",t.__("Updating slide...","ml-slider"),!0),o();var d={action:"update_slide_image",_wpnonce:metaslider.update_slide_image_nonce,slide_id:s.data("slideId"),slider_id:window.parent.metaslider_slider_id,image_id:new_image_id};e.ajax({url:metaslider.ajaxurl,data:d,type:"POST",error:function(e){t&&t.notifyError("metaslider/slide-update-failed",e,!0)},success:function(a){e("#slide-"+s.data("slideId")+" .thumb").css("background-image","url("+a.data.thumbnail_url+")");var d=e("#slide-"+s.data("slideId")+", #slide-"+s.data("slideId")+" .update-image");d.data("attachment-id",selected_item.id),a.data.thumbnail_url&&e("#slide-"+s.data("slideId")).trigger("metaslider/attachment/updated",a.data),i.update_slide_metadata({id:selected_item.id,caption:selected_item.caption,description:selected_item.description,title:selected_item.title,alt:selected_item.alt}),t&&t.notifySuccess("metaslider/slide-updated",t.__("Slide updated successfully","ml-slider"),!0),e(".metaslider table#metaslider-slides-list").trigger("resizeSlides")}})}),l.on("close",function(){o()}),a.on("close",function(){o()})});var n=function(t){t.preventDefault(),window.metaslider.about_to_reload||(e(this).addClass("active").siblings().removeClass("active"),e("#image-api-container").length||(e(this).parents(".media-frame-router").siblings(".media-frame-content").append('<div id="image-api-container"></div>'),e("#image-api-container").append('<metaslider-external source="unsplash" :slideshow-id="'+window.parent.metaslider_slider_id+'" :slide-id="'+window.metaslider.slide_id+'" slide-type="'+(window.metaslider.slide_type||"image")+'"></metaslider-external>'),e(window).trigger("metaslider/initialize_external_api",{selector:"#image-api-container"}),delete window.metaslider.slide_id,delete window.metaslider.slide_type))},r=function(t,i){if(e('.media-menu-item.active:contains("Layer")').length){if(!window.metaslider.pro_supports_imports)return;window.metaslider.slide_type="layer"}t&&(window.metaslider.slide_type=t),window.metaslider.slide_id=i,e(".unsplash-tab").remove(),e(".media-frame-router .media-router").append('<a href="#" id="unsplash-tab" class="text-black hover:text-blue-dark unsplash-tab media-menu-item">Unsplash Library</a>'),e(".toplevel_page_metaslider").on("click",".unsplash-tab",n),e(".media-frame-router .media-router .media-menu-item").on("click",function(){e(window).trigger("metaslider/destroy_external_api"),e(this).addClass("active").siblings().removeClass("active")})},o=function(){window.metaslider.about_to_reload||(e(window).trigger("metaslider/destroy_external_api"),e(".toplevel_page_metaslider").off("click",".unsplash-tab",n),e(".unsplash-tab").remove(),e(".media-frame-router .media-router > a").first().trigger("click"))};e(".metaslider").on("click",".delete-slide",function(t){t.preventDefault();var i=e(this),a={action:"delete_slide",_wpnonce:metaslider.delete_slide_nonce,slide_id:i.data("slideId"),slider_id:window.parent.metaslider_slider_id};i.parents("#slide-"+i.data("slideId")).removeClass("ms-restored").addClass("ms-deleting").append('<div class="ms-delete-overlay"><i style="height:24px;width:24px"><svg class="ms-spin" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></i></div>'),i.parents("#slide-"+i.data("slideId")).find(".ms-delete-status").remove(),e.ajax({url:metaslider.ajaxurl,data:a,type:"POST",error:function(e){alert(e.responseJSON.data.message),$slide=i.parents("#slide-"+i.data("slideId")),$slide.removeClass("ms-deleting"),$slide.find(".ms-delete-overlay").remove()},success:function(t){setTimeout(function(){$slide=i.parents("#slide-"+i.data("slideId")),$slide.addClass("ms-deleted").removeClass("ms-deleting").find(".metaslider-ui-controls").append('<button class="undo-delete-slide" title="'+metaslider.restore_language+'" data-slide-id="'+i.data("slideId")+'">'+metaslider.restore_language+"</button>");var t=$slide.find(".thumb").css("background-image").replace(/^url\(["']?/,"").replace(/["']?\)$/,"");t=window.location.href===t?"":t,"none"==e(".restore-slide-link").css("display")&&e(".restore-slide-link").css("display","inline")},1e3)}})}),e(".metaslider").on("click",".undo-delete-slide, .trash-view-restore",function(t){t.preventDefault();var i=e(this),a={action:"undelete_slide",_wpnonce:metaslider.undelete_slide_nonce,slide_id:i.data("slideId"),slider_id:window.parent.metaslider_slider_id};e("#slide-"+i.data("slideId")).find(".undo-delete-slide").html(""),i.parents("#slide-"+i.data("slideId")).removeClass("ms-deleted").addClass("ms-deleting").css("padding-top","31px").append('<div class="ms-delete-overlay"><i style="height:24px;width:24px"><svg class="ms-spin" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></i></div>'),i.parents("#slide-"+i.data("slideId")).find(".ms-delete-status").remove(),i.parents("#slide-"+i.data("slideId")).find(".delete-slide").focus(),e.ajax({url:metaslider.ajaxurl,data:a,type:"POST",error:function(e){$slide=i.parents("#slide-"+i.data("slideId")),$slide.removeClass("ms-restoring").addClass("ms-deleted"),$slide.find(".ms-delete-overlay").remove(),e.responseJSON?alert(e.responseJSON.data.message):alert("There was an error with the server and the action could not be completed.")},success:function(t){$slide=i.parents("#slide-"+i.data("slideId")),$slide.addClass("ms-restored"),$slide.removeClass("ms-deleting").find(".undo-delete-slide, .trash-view-restore").remove(),$slide.find(".ms-delete-overlay").remove(),e("#slide-"+i.data("slideId")+" h4").after('<span class="ms-delete-status is-success">'+metaslider.restored_language+"</span>"),e("#slide-"+i.data("slideId")).find(".row-actions.trash-btns").html("");var a=$slide.find(".thumb").css("background-image").replace(/^url\(["']?/,"").replace(/["']?\)$/,"");a=window.location.href===a?"":a}})}),e(".metaslider table#metaslider-slides-list").live("resizeSlides",function(t){var i=e("input.width").val(),a=e("input.height").val();e("tr.slide input[name='resize_slide_id']",this).each(function(){$this=e(this);var t=$this.attr("data-width"),d=$this.attr("data-height"),s=e(this).closest("tr"),l=s.data("crop_changed");if(t!=i||d!=a||l){$this.attr("data-width",i),$this.attr("data-height",a);var n={action:"resize_image_slide",slider_id:window.parent.metaslider_slider_id,slide_id:$this.attr("data-slide_id"),_wpnonce:metaslider.resize_nonce};e.ajax({type:"POST",data:n,async:!1,cache:!1,url:metaslider.ajaxurl,success:function(e){l&&s.data("crop_changed",!1),e.data.thumbnail_url&&$this.closest("tr.slide").trigger("metaslider/attachment/updated",e.data)}})}})}),e(".tipsy-tooltip").tipsy({className:"msTipsy",live:!0,delayIn:500,html:!0,gravity:"e"}),e(".tipsy-tooltip-top").tipsy({live:!0,delayIn:500,html:!0,gravity:"s"}),e(".tipsy-tooltip-bottom").tipsy({live:!0,delayIn:500,html:!0,gravity:"n"}),e(".tipsy-tooltip-bottom-toolbar").tipsy({live:!0,delayIn:500,html:!0,gravity:"n",offset:2})});var MetaSlider_Helpers={capitalize:function(e){return e.replace(/\b\w/g,function(e){return e.toUpperCase()})}};