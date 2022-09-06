/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

 "use strict";

 function showTime(){ // Digital watch 
     var date = new Date();
     var h = date.getHours(); // 0 - 23
     var m = date.getMinutes(); // 0 - 59
     var s = date.getSeconds(); // 0 - 59
     var session = "AM";
     
     if(h == 0){
         h = 12;
     }
     
     if(h > 12){
         h = h - 12;
         session = "PM";
     }
     
     h = (h < 10) ? "0" + h : h;
     m = (m < 10) ? "0" + m : m;
     s = (s < 10) ? "0" + s : s;
     
     var time = h + ":" + m + ":" + s + " " + session;
     document.getElementById("MyClockDisplay").innerText = time;
     document.getElementById("MyClockDisplay").textContent = time;
     
     setTimeout(showTime, 1000);
     
 }
 
 showTime();
 
 
 
 
 
 function sendNewsPostData(){ //send new post data  
     var post_title = document.getElementById('post_title').value; 
     var category = document.getElementById('category').value;
     var post_description = document.getElementById('post_description').value;
     var publish_at = document.getElementById('publish_at').value;
     // image 
     var fileLength = document.getElementById('image-upload').files.length;
     // end image  
    var tags = document.getElementById('tags').value;
     var status = document.getElementById('status').value;
 
     if(post_title == ""){
         iziToast.error({
             title: 'Insert Post Title',
             position: 'topRight'
         });
     } 
     else if(category == ""){
         iziToast.error({
             title: 'Insert Tag',
             position: 'topRight'
         });
     }
     else if(publish_at == ""){
         iziToast.error({
             title: 'Insert Publish Date',
             position: 'topRight'
         });
     }
     else if( post_description == ""){
         iziToast.error({
             title: 'Type Post content',
             position: 'topRight'
         });
     }
     else if(fileLength == 0){
         iziToast.error({
             title: 'Insert Post Thumbnail',
             position: 'topRight'
         });
     } 
     else if(tags == ""){
         iziToast.error({
             title: 'Insert Tags',
             position: 'topRight'
         });
     }
     else if(status == ""){
         iziToast.error({
             title: 'Status is required',
             position: 'topRight'
         });
     }
     else{ 
         var file = document.getElementById('image-upload').files[0];
         var fileName = file.name;
         var fileSize = file.size;
         var fileFormate = fileName.split('.').pop();
         let FileData = new FormData();

         FileData.append('FileKey', file); 
         FileData.append('post_title',post_title); 
         FileData.append('post_description',post_description); 
         FileData.append('category',category); 
         FileData.append('tags',tags);
         FileData.append('status',status);
         FileData.append('publish_at',publish_at);   

         let config = {headers:{'content-type':'multipart/form-data'}};
     
 
         var url = "/administrator/news/insert-post";
         axios.post(url,FileData,config)
         .then(function(response){
            document.getElementById('success-msg').style.display = 'block';
            iziToast.success({
                 title: 'Create Success',
                 position: 'topRight'
             });
             setTimeout(function(){
                window.location.href = "/administrator/news/posts";
           },1000)
         })
         .catch(function (error){
             console.log(error);
         });
     }
 };


 function sendUpdatePostdata(){
     var post_id = document.getElementById('post_id').value; 
     var post_title = document.getElementById('post_title').value;  
     var category = document.getElementById('category').value; 
     var tags = document.getElementById('tags').value; 
     var post_description = document.getElementById('post_description').value; 
     var publish_at = document.getElementById('publish_at').value;
     var fileLength = document.getElementById('image-upload').files.length;
     // end image  
     var status = document.getElementById('status').value;
 
     if(post_title == ""){
         iziToast.error({
             title: 'Post Title is Required!',
             position: 'topRight'
         });
     } 
     else if(publish_at == ""){
         iziToast.error({
             title: 'Publish Date is Required',
             position: 'topRight'
         });
     }
     else if( category == ""){
         iziToast.error({
             title: 'Type Post Category',
             position: 'topRight'
         });
     }
     else if( tags == ""){
         iziToast.error({
             title: 'Type Post Tag',
             position: 'topRight'
         });
     }
     else if(fileLength == 0){
         iziToast.error({
             title: 'Post Thumbnail is Required',
             position: 'topRight'
         });
     } 
     else if(status == ""){
         iziToast.error({
             title: 'Status is required',
             position: 'topRight'
         });
     }
 
     else{
 
         var file = document.getElementById('image-upload').files[0];
         let FileData = new FormData();
             FileData.append('FileKey', file); 
             FileData.append('id',post_id); 
             FileData.append('post_title',post_title); 
             FileData.append('category',category); 
             FileData.append('tags',tags);
             FileData.append('post_description',post_description);
             FileData.append('publish_at',publish_at); 
             FileData.append('status',status); 
     
 
         
         let config = {headers:{'content-type':'multipart/form-data'}};
 
         var url = "/administrator/news/update-post-insert";
         axios.post(url,FileData,config)
         .then(function(response){
             document.getElementById('success-msg').style.display = 'block';
             iziToast.success({
                 title: 'Successfully Update',
                 position: 'topRight'
             });
             setTimeout(function(){
                 window.location.href = "/administrator/news/posts";
             },1000)
         })
         .catch(function (error){
             console.log(error);
         });
     }
 }
 function sendUpdatePagetdata(){
     var post_id = document.getElementById('post_id').value; 
     var post_title = document.getElementById('post_title').value;  
     var category = document.getElementById('category').value; 
     var tags = document.getElementById('tags').value; 
     var post_description = document.getElementById('post_description').value; 
     var publish_at = document.getElementById('publish_at').value;
     var fileLength = document.getElementById('image-upload').files.length;
     // end image  
     var status = document.getElementById('status').value;
 
     if(post_title == ""){
         iziToast.error({
             title: 'page Title is Required!',
             position: 'topRight'
         });
     } 
     else if(publish_at == ""){
         iziToast.error({
             title: 'Publish Date is Required',
             position: 'topRight'
         });
     }
     else if( category == ""){
         iziToast.error({
             title: 'Type page Menu',
             position: 'topRight'
         });
     }
     else if( tags == ""){
         iziToast.error({
             title: 'Type page Tag',
             position: 'topRight'
         });
     }
     else if(fileLength == 0){
         iziToast.error({
             title: 'page Thumbnail is Required',
             position: 'topRight'
         });
     } 
     else if(status == ""){
         iziToast.error({
             title: 'Status is required',
             position: 'topRight'
         });
     }
 
     else{
 
         var file = document.getElementById('image-upload').files[0];
         let FileData = new FormData();
             FileData.append('FileKey', file); 
             FileData.append('id',post_id); 
             FileData.append('post_title',post_title); 
             FileData.append('category',category); 
             FileData.append('tags',tags);
             FileData.append('post_description',post_description);
             FileData.append('publish_at',publish_at); 
             FileData.append('status',status); 
     
 
         
         let config = {headers:{'content-type':'multipart/form-data'}};
 
         var url = "/administrator/news/update-page-insert";
         axios.post(url,FileData,config)
         .then(function(response){
             document.getElementById('success-msg').style.display = 'block';
             iziToast.success({
                 title: 'Successfully Update',
                 position: 'topRight'
             });
             setTimeout(function(){
                 window.location.href = "/administrator/news/pages";
             },1000)
         })
         .catch(function (error){
             console.log(error);
         });
     }
 }

 function sendDeletePostData()
 {
     var post_id = document.getElementById('post_id').value; 
 
     var url = "/news/delete-post";
     var data = {id:post_id};
     axios.post(url,data)
     .then(function(response){
         document.getElementById('success-msg').style.display = 'block';
         iziToast.success({
             title: 'Successfully Delete',
             position: 'topRight'
         });
         setTimeout(function(){
             window.location.href = "/news/posts";
         },1000)
     })
     .catch(function (error){
         console.log(error);
     });
 }
 
 function sendCatData(){ //send category data  
     var cat_name = document.getElementById('cat_name').value;
     var cat_desc = document.getElementById('cat_desc').value;
     var cat_status = document.getElementById('cat_status').value; 
 
     if(cat_name == ""){
         iziToast.error({
             title: 'Name is Required!',
             position: 'topRight'
         });
     }
     else{
         var url = "/administrator/news/insert-category";
         var data = {cat_name:cat_name, cat_desc:cat_desc, cat_status:cat_status};
         axios.post(url,data)
         .then(function(response){
            document.getElementById('success-msg').style.display = 'block';
            iziToast.success({
                 title: 'Successfully Created ',
                 position: 'topRight'
             });
            setTimeout(function(){
                 window.location.href = "/administrator/news/post-categories";
            },1000)
         })
         .catch(function (error){
             console.log(error);
         });
     } 
 }


 
 function updateCatData(){ // update category data 
     var cat_name = document.getElementById('cat_name').value;
     var cat_id = document.getElementById('cat_id').value;
     var cat_desc = document.getElementById('cat_desc').value; 
     var cat_status = document.getElementById('cat_status').value; 
 
     if(cat_name == ""){
         iziToast.error({
             title: 'Name is Required!',
             position: 'topRight'
         });
     }
     else{
         var url = "/administrator/news/update-category";
         var data = {cat_name:cat_name, cat_id:cat_id, cat_desc:cat_desc, cat_status:cat_status};
         axios.post(url,data)
         .then(function(response){
            document.getElementById('success-msg').style.display = 'block';
            iziToast.success({
                 title: 'Successfully Updated',
                 position: 'topRight'
             });
            setTimeout(function(){
                 window.location.href = "/administrator/news/post-categories";
            },1000)
         })
         .catch(function (error){
             console.log(error);
         });
     }
 }
 
 
 function sendTagData(){ //send tag data 
     var tag_name = document.getElementById('tag_name').value;
     var tag_desc = document.getElementById('tag_desc').value;
     var tag_status = document.getElementById('tag_status').value; 
 
     if(tag_name == ""){
         iziToast.error({
             title: 'Name is Required!',
             position: 'topRight'
         });
     }
     else{
         var url = "/news/insert-tag";
         var data = {tag_name:tag_name, tag_desc:tag_desc, tag_status:tag_status};
         axios.post(url,data)
         .then(function(response){
            document.getElementById('success-msg').style.display = 'block';
            iziToast.success({
             title: 'Successfully Created',
             position: 'topRight'
         });
            setTimeout(function(){
                 window.location.href = "/news/post-tags";
            },1000)
         })
         .catch(function (error){
             console.log(error);
         });
     } 
 
 }  
 
 function updateSiteSetting(){ // update site setting data
     var website_title = document.getElementById('website_title').value; 
    var website_logo = document.getElementById('website_logo').files[0];
    var footer_logo = document.getElementById('footer_logo').files[0];
    var favicon_icon = document.getElementById('favicon_icon').files[0];
 
         let FileData = new FormData();
         FileData.append('website_title', website_title);
         FileData.append('website_logo',website_logo);
         FileData.append('footer_logo',footer_logo);
         FileData.append('favicon_icon',favicon_icon);
     
         var url = "/administrator/settings/update_Site_setting";
         let config = {headers:{'content-type':'multipart/form-data'}};
     
         axios.post(url,FileData,config)
         .then(function(response){
             document.getElementById('success-msg').style.display = 'block';
             iziToast.success({
                 title: 'Successfully Updated',
                 position: 'topRight'
             });
             setTimeout(function(){
                 window.location.href = "/administrator/settings/site_setting";
             },1000)
             console.log(response);
         })
         .catch(function (error){
             console.log(error);
         });
     } 
 
 
 function updatePanelSetting(){ // update panel setting 
     var theme_color = document.getElementById('theme_color').value;
 
     var url = "/settings/update_panel_face";
     var data = {
         theme_color:theme_color,
     };
     axios.post(url,data)
     .then(function(response){
         document.getElementById('success-msg').style.display = 'block';
         iziToast.success({
             title: 'Successfully Updated',
             position: 'topRight'
         });
         setTimeout(function(){
             window.location.href = "/settings/panel_face";
         },1000)
         console.log(response);
     })
     .catch(function (error){
         console.log(error);
     });
 }
  

 function homeChange(){
    var welcome_title = document.getElementById('welcome_title').value; 
    var banner_website_title = document.getElementById('banner_website_title').value; 
    var banner_content = document.getElementById('banner_content').value; 
    var button_text = document.getElementById('button_text').value; 
    var button_url = document.getElementById('button_url').value; 
    // bg image  
     var banner_bg = document.getElementById('banner_bg').files.length; 
     var banner_img = document.getElementById('banner_img').files.length; 
   

    if(banner_bg == 0){
        iziToast.error({
            title: 'Insert Background Image',
            position: 'topRight'
        });
    } 
    else if(banner_img == 0){
        iziToast.error({
            title: 'Insert Banner Image',
            position: 'topRight'
        });
    } 
    else if(welcome_title == ""){
        iziToast.error({
            title: 'Welcome Title is Required!',
            position: 'topRight'
        });
    }  
    else if(banner_website_title == ""){
        iziToast.error({
            title: 'Banner Website title is Required!',
            position: 'topRight'
        });
    }
    else if(banner_content == ""){
        iziToast.error({
            title: 'Banner Content is Required!',
            position: 'topRight'
        });
    }
    else if(button_text == ""){
        iziToast.error({
            title: 'Button Text is Required!',
            position: 'topRight'
        });
    }

    else{ 

        var file = document.getElementById('banner_bg').files[0];
        var fileName = file.name; 
        var bannerFile = document.getElementById('banner_img').files[0];
        var bannerFileName = bannerFile.name; 
        var fileFormate = fileName.split('.').pop();  
        var fileFormate = bannerFileName.split('.').pop();  
        let FileData = new FormData();

        FileData.append('FileKey', file);   
        FileData.append('bannerFile', bannerFile);   
        FileData.append('welcome_title',welcome_title); 
        FileData.append('banner_website_title',banner_website_title); 
        FileData.append('banner_content',banner_content); 
        FileData.append('button_text',button_text); 
        FileData.append('button_url',button_url); 

        let config = {headers:{'content-type':'multipart/form-data'}}; 

        var url = "/administrator/home/banner-section-add";
         axios.post(url,FileData,config)
         .then(function(response){
           document.getElementById('success-msg').style.display = 'block';
           iziToast.success({
            title: 'Update Successfully!',
            position: 'topRight'
        });
           setTimeout(function(){
                window.location.href =  "/administrator/home/banner-section";
           },1000) 
        })
        .catch(function (error){
            console.log(error);
        });

    } 
     
 }

//  home page banner item section 

 function homePageBannerItem(){
    //  care 
    var care_title = document.getElementById('care_title').value; 
    var care_short_desc = document.getElementById('care_short_desc').value; 
    var care_sec_title = document.getElementById('care_sec_title').value; 
    var care_sec_desc = document.getElementById('care_sec_desc').value; 
    var care_btn_text = document.getElementById('care_btn_text').value; 
    var care_btn_url = document.getElementById('care_btn_url').value;  
    var care_img = document.getElementById('image-upload').files.length; 
 

    if(care_img == 0){
        iziToast.error({
            title: 'Insert care Image',
            position: 'topRight'
        });
    }  
    else{
 
        // care img
        var care_file = document.getElementById('image-upload').files[0]; 
        let FileData = new FormData();

    
        // care  
        FileData.append('care_file', care_file);   
        FileData.append('care_title', care_title);   
        FileData.append('care_short_desc',care_short_desc); 
        FileData.append('care_sec_title',care_sec_title); 
        FileData.append('care_sec_desc',care_sec_desc); 
        FileData.append('care_btn_text',care_btn_text); 
        FileData.append('care_btn_url',care_btn_url);   
    
        let config = {headers:{'content-type':'multipart/form-data'}}; 
    
        var url = "/administrator/home/banner-section-item";
            axios.post(url,FileData,config)
            .then(function(response){
            document.getElementById('success-msg').style.display = 'block';
            iziToast.success({
            title: 'Banner Item Add Success',
            position: 'topRight'
        });
            setTimeout(function(){
                window.location.href =  "/administrator/home/banner-item";
            },1000) 
        })
        .catch(function (error){
            console.log(error);
        });
    }

 }
 

// about home page function 

function homeAboutUs(){
    var about_sec_title = document.getElementById('about_sec_title').value; 
    var about_sec_pra = document.getElementById('about_sec_pra').value; 
    var about_title = document.getElementById('about_title').value; 
    var about_content = document.getElementById('about_content').value; 
    var button_text = document.getElementById('button_text').value; 
    var button_url = document.getElementById('button_url').value; 
    // bg image  
     var about_img = document.getElementById('about_img').files.length;   
   

    if(about_img == 0){
        iziToast.error({
            title: 'Insert About Image',
            position: 'topRight'
        });
    }  
    else if(about_sec_title == ""){
        iziToast.error({
            title: 'About Section Title is Required!',
            position: 'topRight'
        });
    }  
    else if(about_sec_pra == ""){
        iziToast.error({
            title: 'About Section Paragraph is Required!',
            position: 'topRight'
        });
    }
    else if(about_title == ""){
        iziToast.error({
            title: 'About Title is Required!',
            position: 'topRight'
        });
    }
    else if(about_content == ""){
        iziToast.error({
            title: 'About Paragraph is Required!',
            position: 'topRight'
        });
    }
    else if(button_text == ""){
        iziToast.error({
            title: 'Button Text is Required!',
            position: 'topRight'
        });
    }
    else if(button_url == ""){
        iziToast.error({
            title: 'Button url is Required!',
            position: 'topRight'
        });
    }

    else{ 

        var file = document.getElementById('about_img').files[0];
        var fileName = file.name;   
        var fileFormate = fileName.split('.').pop();   
        let FileData = new FormData();
 
        FileData.append('FileKey', file);   
        FileData.append('about_sec_title', about_sec_title);   
        FileData.append('about_sec_pra',about_sec_pra); 
        FileData.append('about_title',about_title); 
        FileData.append('about_content',about_content); 
        FileData.append('button_text',button_text); 
        FileData.append('button_url',button_url); 

        let config = {headers:{'content-type':'multipart/form-data'}}; 

        var url = "/administrator/home/about-us-add";
         axios.post(url,FileData,config)
         .then(function(response){
           document.getElementById('success-msg').style.display = 'block';
           iziToast.success({
            title: 'Update Successfully!',
            position: 'topRight'
        });
           setTimeout(function(){
                window.location.href =  "/administrator/home/about-us";
           },1000) 
        })
        .catch(function (error){
            console.log(error);
        });

    } 
}


function parentsAdd(){
    var parents_comments = document.getElementById('parents_comments').value; 
    var parents_name = document.getElementById('parents_name').value; 
    var parents_desg = document.getElementById('parents_desg').value;   
    // bg image  
     var parents_img = document.getElementById('parents_img').files.length;   
   

 
    if(parents_comments == ""){
        iziToast.error({
            title: 'Parents Comments is Required!',
            position: 'topRight'
        });
    }     
    else if(parents_img == 0){
        iziToast.error({
            title: 'Parents Image',
            position: 'topRight'
        });
    } 
    else if(parents_name == ""){
        iziToast.error({
            title: 'Parents Name is Required!',
            position: 'topRight'
        });
    }
    else if(parents_desg == ""){
        iziToast.error({
            title: 'Parents Designation is Required!',
            position: 'topRight'
        });
    } 
    else{ 

        var file = document.getElementById('parents_img').files[0];
        var fileName = file.name;   
        var fileFormate = fileName.split('.').pop();   
        let FileData = new FormData();
 
        FileData.append('FileKey', file);   
        FileData.append('parents_comments', parents_comments);   
        FileData.append('parents_name',parents_name); 
        FileData.append('parents_desg',parents_desg);

        let config = {headers:{'content-type':'multipart/form-data'}}; 

        var url = "/administrator/home/parents-say-add";
         axios.post(url,FileData,config)
         .then(function(response){
           document.getElementById('success-msg').style.display = 'block';
           iziToast.success({
            title: 'Comments Insert Successfully!',
            position: 'topRight'
        });
           setTimeout(function(){
                window.location.href =  "/administrator/home/parents-say";
           },1000) 
        })
        .catch(function (error){
            console.log(error);
        });

    } 
}


function featureChange(){ 
    var feature_sec_title = document.getElementById('feature_sec_title').value; 
    var feature_sec_desc = document.getElementById('feature_sec_desc').value; 
    var f_item_1_icon = document.getElementById('f_item_1_icon').value;   
    var f_item_1_title = document.getElementById('f_item_1_title').value;   
    var f_item_1_desc = document.getElementById('f_item_1_desc').value;   
    var f_item_2_icon = document.getElementById('f_item_2_icon').value;   
    var f_item_2_title = document.getElementById('f_item_2_title').value;   
    var f_item_2_desc = document.getElementById('f_item_2_desc').value;   
    var f_item_3_icon = document.getElementById('f_item_3_icon').value;   
    var f_item_3_title = document.getElementById('f_item_3_title').value;   
    var f_item_3_desc = document.getElementById('f_item_3_desc').value;      
    var f_item_4_icon = document.getElementById('f_item_4_icon').value;   
    var f_item_4_title = document.getElementById('f_item_4_title').value;   
    var f_item_4_desc = document.getElementById('f_item_4_desc').value;      
    // bg image  
     var feature_img = document.getElementById('feature_img').files.length;   
   

 
    if(feature_sec_title == ""){
        iziToast.error({
            title: 'Feature Section Title is Required!',
            position: 'topRight'
        });
    }    
    else if(feature_sec_desc == ""){
        iziToast.error({
            title: 'Feature section description is Required!',
            position: 'topRight'
        });
    }
    // intem 1 
    else if(f_item_1_icon == ""){
        iziToast.error({
            title: 'Feature item 1 icon is Required!',
            position: 'topRight'
        });
    }
    else if(f_item_1_title == ""){
        iziToast.error({
            title: 'Feature item 1 title is Required!',
            position: 'topRight'
        });
    }
    else if(f_item_1_desc == ""){
        iziToast.error({
            title: 'Feature item 1 description is Required!',
            position: 'topRight'
        });
    } 
    // intem 2
    else if(f_item_2_icon == ""){
        iziToast.error({
            title: 'Feature item 2 icon is Required!',
            position: 'topRight'
        });
    }
    else if(f_item_2_title == ""){
        iziToast.error({
            title: 'Feature item 2 title is Required!',
            position: 'topRight'
        });
    }
    else if(f_item_2_desc == ""){
        iziToast.error({
            title: 'Feature item 2 description is Required!',
            position: 'topRight'
        });
    } 
    // intem 3
    else if(f_item_3_icon == ""){
        iziToast.error({
            title: 'Feature item 3 icon is Required!',
            position: 'topRight'
        });
    }
    else if(f_item_3_title == ""){
        iziToast.error({
            title: 'Feature item 3 title is Required!',
            position: 'topRight'
        });
    }
    else if(f_item_3_desc == ""){
        iziToast.error({
            title: 'Feature item 3 description is Required!',
            position: 'topRight'
        });
    } 
    // intem 4
    else if(f_item_4_icon == ""){
        iziToast.error({
            title: 'Feature item 4 icon is Required!',
            position: 'topRight'
        });
    }
    else if(f_item_4_title == ""){
        iziToast.error({
            title: 'Feature item 4 title is Required!',
            position: 'topRight'
        });
    }
    else if(f_item_4_desc == ""){
        iziToast.error({
            title: 'Feature item 4 description is Required!',
            position: 'topRight'
        });
    } 
    else if(feature_img == 0){
        iziToast.error({
            title: 'Insert Feature Image',
            position: 'topRight'
        });
    } 
    else{ 

        var file = document.getElementById('feature_img').files[0];
        var fileName = file.name;   
        var fileFormate = fileName.split('.').pop();   
        let FileData = new FormData(); 
 
        FileData.append('FileKey', file);   
        FileData.append('feature_sec_title', feature_sec_title);   
        FileData.append('feature_sec_desc',feature_sec_desc); 
        // item 4
        FileData.append('f_item_1_icon',f_item_1_icon);
        FileData.append('f_item_1_title',f_item_1_title);
        FileData.append('f_item_1_desc',f_item_1_desc); 
        // item 4
        FileData.append('f_item_2_icon',f_item_2_icon);
        FileData.append('f_item_2_title',f_item_2_title);
        FileData.append('f_item_2_desc',f_item_2_desc); 
        // item 4
        FileData.append('f_item_3_icon',f_item_3_icon);
        FileData.append('f_item_3_title',f_item_3_title);
        FileData.append('f_item_3_desc',f_item_3_desc);
        // item 4 
        FileData.append('f_item_4_icon',f_item_4_icon);
        FileData.append('f_item_4_title',f_item_4_title);
        FileData.append('f_item_4_desc',f_item_4_desc); 

        let config = {headers:{'content-type':'multipart/form-data'}}; 

        var url = "/administrator/home/features-add";
         axios.post(url,FileData,config)
         .then(function(response){
           document.getElementById('success-msg').style.display = 'block';
           iziToast.success({
            title: 'Comments Insert Successfully!',
            position: 'topRight'
        });
           setTimeout(function(){
                window.location.href =  "/administrator/home/features";
           },1000) 
        })
        .catch(function (error){
            console.log(error);
        });

    } 
}


function homeServices(){   
     
    var services_cat = document.getElementById('services_cat').value;   
    var services_title = document.getElementById('services_title').value;   
    var services_desc = document.getElementById('services_desc').value;   
    var services_list1 = document.getElementById('services_list1').value;   
    var services_list2 = document.getElementById('services_list2').value;   
    var services_list3 = document.getElementById('services_list3').value;   
    var button_text = document.getElementById('button_text').value;   
    var button_url = document.getElementById('button_url').value;   
    // bg image  
     var services_img = document.getElementById('services_img').files.length;   
   

    if(services_cat == ""){
        iziToast.error({
            title: 'Service Category is Required!',
            position: 'topRight'
        });
    }
    else if(services_title == ""){
        iziToast.error({
            title: 'Services Title is Required!',
            position: 'topRight'
        });
    } 
    else if(services_desc == ""){
        iziToast.error({
            title: 'Services Description is Required!',
            position: 'topRight'
        });
    } 
    else if(services_list1 == ""){
        iziToast.error({
            title: 'Services list 1 is Required!',
            position: 'topRight'
        });
    } 
    else if(services_list2 == ""){
        iziToast.error({
            title: 'Services list 2 is Required!',
            position: 'topRight'
        });
    } 
    else if(services_list3 == ""){
        iziToast.error({
            title: 'Services list 3 is Required!',
            position: 'topRight'
        });
    } 
    else if(button_text == ""){
        iziToast.error({
            title: 'Button Text is Required',
            position: 'topRight'
        });
    } 
    else if(button_url == ""){
        iziToast.error({
            title: 'Button URL is Required',
            position: 'topRight'
        });
    } 
    else if(services_img == 0){
        iziToast.error({
            title: 'Services Image is Required!',
            position: 'topRight'
        });
    } 
    else{ 

        var file = document.getElementById('services_img').files[0];
        var fileName = file.name;   
        var fileFormate = fileName.split('.').pop();   
        let FileData = new FormData(); 

        FileData.append('FileKey', file);    
        FileData.append('services_cat',services_cat);
        FileData.append('services_title',services_title); 
        FileData.append('services_desc',services_desc);
        FileData.append('services_list1',services_list1);
        FileData.append('services_list2',services_list2);
        FileData.append('services_list3',services_list3);
        FileData.append('button_text',button_text);
        FileData.append('button_url',button_url); 

        let config = {headers:{'content-type':'multipart/form-data'}}; 

        var url = "/administrator/home/services-add";
         axios.post(url,FileData,config)
         .then(function(response){
           document.getElementById('success-msg').style.display = 'block';
           iziToast.success({
            title: 'Services Insert Successfully!',
            position: 'topRight'
        });
           setTimeout(function(){
                window.location.href =  "/administrator/home/services";
           },1000) 
        })
        .catch(function (error){
            console.log(error);
        });

    } 
}

function headerSettings(){ 
    var address = document.getElementById('address').value; 
    var email = document.getElementById('email').value; 
    var phone = document.getElementById('phone').value;   
    var facebook_url = document.getElementById('facebook_url').value;   
    var twitter_url = document.getElementById('twitter_url').value;   
    var instagram_url = document.getElementById('instagram_url').value;    
 
    if(address == ""){
        iziToast.error({
            title: 'address is Required!',
            position: 'topRight'
        });
    }
    else if(email == ""){
        iziToast.error({
            title: 'email is Required!',
            position: 'topRight'
        });
    }
    else if(phone == ""){
        iziToast.error({
            title: 'Phone is Required!',
            position: 'topRight'
        });
    }      
    else if(facebook_url == ""){
        iziToast.error({
            title: 'Facebook URL is Required!',
            position: 'topRight'
        });
    }      
    else if(twitter_url == ""){
        iziToast.error({
            title: 'Twitter URL is Required!',
            position: 'topRight'
        });
    }      
    else if(instagram_url == ""){
        iziToast.error({
            title: 'instagram URL is Required!',
            position: 'topRight'
        });
    }  
    else{ 
        let FileData = new FormData(); 
    
        FileData.append('address', address);   
        FileData.append('email',email); 
        FileData.append('phone',phone);
        FileData.append('facebook_url',facebook_url);
        FileData.append('twitter_url',twitter_url);
        FileData.append('instagram_url',instagram_url); 
 

        var url = "/administrator/settings/header-setting-add";
         axios.post(url,FileData)
         .then(function(response){
           document.getElementById('success-msg').style.display = 'block';
           iziToast.success({
            title: 'Header Update Successfully!',
            position: 'topRight'
        });
           setTimeout(function(){
                window.location.href =  "/administrator/settings/headers";
           },1000) 
        })
        .catch(function (error){
            console.log(error);
        });

    } 
}



function addMenu(){ 
    var new_menu = document.getElementById('new_menu').value; 
    var menu_url = document.getElementById('menu_url').value;     
 
    if(new_menu == ""){
        iziToast.error({
            title: 'Menu field is Required!',
            position: 'topRight'
        });
    }
    else if(menu_url == ""){
        iziToast.error({
            title: 'Menu URL field is Required!',
            position: 'topRight'
        });
    }  
    else{ 
 
        let FileData = new FormData(); 
    
        FileData.append('new_menu', new_menu);   
        FileData.append('menu_url',menu_url);  
 

        var url = "/administrator/settings/add-menu-add";
         axios.post(url,FileData)
         .then(function(response){
             if(response.data == 'Duplicate'){
                iziToast.error({
                    title: 'already exit this menu',
                    position: 'topRight'
                });
             }else{
                document.getElementById('success-msg').style.display = 'block';
                iziToast.success({
                 title: 'Comments Insert Successfully!',
                 position: 'topRight'
             });
                setTimeout(function(){
                     window.location.href =  "/administrator/news/create-page";
                },1000) 
             }
        })
        .catch(function (error){
            console.log(error);
        });

    } 
}

function sendPageData(){ //send new post data  
    var post_title = document.getElementById('post_title').value; 
    var category = document.getElementById('category').value;
    var post_description = document.getElementById('post_description').value;
    var publish_at = document.getElementById('publish_at').value;
    // image 
    var fileLength = document.getElementById('image-upload').files.length;
    // end image  
   var tags = document.getElementById('tags').value;
    var status = document.getElementById('status').value;

    if(post_title == ""){
        iziToast.error({
            title: 'Insert Post Title',
            position: 'topRight'
        });
    } 
    else if(category == ""){
        iziToast.error({
            title: 'Insert Menu',
            position: 'topRight'
        });
    }
    else if(publish_at == ""){
        iziToast.error({
            title: 'Insert Publish Date',
            position: 'topRight'
        });
    }
    else if( post_description == ""){
        iziToast.error({
            title: 'Type Post content',
            position: 'topRight'
        });
    }
    else if(fileLength == 0){
        iziToast.error({
            title: 'Insert Post Thumbnail',
            position: 'topRight'
        });
    } 
    else if(tags == ""){
        iziToast.error({
            title: 'Insert Tags',
            position: 'topRight'
        });
    }
    else if(status == ""){
        iziToast.error({
            title: 'Status is required',
            position: 'topRight'
        });
    }
    else{ 
        var file = document.getElementById('image-upload').files[0];
        var fileName = file.name;
        var fileSize = file.size;
        var fileFormate = fileName.split('.').pop();
        let FileData = new FormData();

        FileData.append('FileKey', file); 
        FileData.append('post_title',post_title); 
        FileData.append('post_description',post_description); 
        FileData.append('category',category); 
        FileData.append('tags',tags);
        FileData.append('status',status);
        FileData.append('publish_at',publish_at);   

        let config = {headers:{'content-type':'multipart/form-data'}};
    

        var url = "/administrator/news/create-page";
        axios.post(url,FileData,config)
        .then(function(response){
           document.getElementById('success-msg').style.display = 'block';
           iziToast.success({
                title: 'Create Success',
                position: 'topRight'
            });
            setTimeout(function(){
               window.location.href = "/administrator/news/pages";
          },1000)
        })
        .catch(function (error){
            console.log(error);
        });
    }
};

function setFooterSettings(){ //send new post data   
 
    var st_day = document.getElementById('st_day').value;
    var end_day = document.getElementById('end_day').value;
    var o_start_time = document.getElementById('o_start_time').value;
    var o_end_time = document.getElementById('o_end_time').value;
    var copy_text = document.getElementById('copy_text').value;
    var d_by_text = document.getElementById('d_by_text').value;
    var d_by_url = document.getElementById('d_by_url').value;
    var hosted_text = document.getElementById('hosted_text').value;
    var hosted_com = document.getElementById('hosted_com').value;
    var hosted_url = document.getElementById('hosted_url').value;  

    if(st_day == ""){
        iziToast.error({
            title: 'Office Start Day Required',
            position: 'topRight'
        });
    } 
    else if(end_day == ""){
        iziToast.error({
            title: 'Office End Time Day Required',
            position: 'topRight'
        });
    }
    else if(o_start_time == ""){
        iziToast.error({
            title: 'Office Start Time Required',
            position: 'topRight'
        });
    }
    else if(o_end_time == ""){
        iziToast.error({
            title: 'Office End Time is Required',
            position: 'topRight'
        });
    }
    else if(copy_text == ""){
        iziToast.error({
            title: 'Copy Right text required',
            position: 'topRight'
        });
    } 
    else{  
        let FileData = new FormData();   
        FileData.append('st_day',st_day); 
        FileData.append('end_day',end_day); 
        FileData.append('o_start_time',o_start_time); 
        FileData.append('o_end_time',o_end_time); 
        FileData.append('copy_text',copy_text);    
        FileData.append('d_by_text',d_by_text);    
        FileData.append('d_by_url',d_by_url);    
        FileData.append('hosted_text',hosted_text);    
        FileData.append('hosted_com',hosted_com);    
        FileData.append('hosted_url',hosted_url);    

        var url = "/administrator/settings/footer-insert";
        axios.post(url,FileData)
        .then(function(response){
           document.getElementById('success-msg').style.display = 'block';
           iziToast.success({
                title: 'Create Success',
                position: 'topRight'
            });
            setTimeout(function(){
               window.location.href = "/administrator/settings/footers";
          },1000)
        })
        .catch(function (error){
            console.log(error);
        });
    }
};



function galleryAdd(){ //send new post data  
    var gal_cat = document.getElementById('gal_cat').value;  
    // image 
    var fileLength = document.getElementById('image-upload').files.length; 

    if(fileLength == 0){
        iziToast.error({
            title: 'Insert Gallery Image',
            position: 'topRight'
        });
    }  
    else{ 
        var file = document.getElementById('image-upload').files[0];
        var fileName = file.name;
        var fileSize = file.size;
        var fileFormate = fileName.split('.').pop();
        let FileData = new FormData();

        FileData.append('FileKey', file); 
        FileData.append('gal_cat',gal_cat);     

        let config = {headers:{'content-type':'multipart/form-data'}};
    

        var url = "/administrator/home/gallery-add";
        axios.post(url,FileData,config)
        .then(function(response){
           document.getElementById('success-msg').style.display = 'block';
           iziToast.success({
                title: 'Gallery Image Add Success',
                position: 'topRight'
            });
            setTimeout(function(){
               window.location.href = "/administrator/home/gallery";
          },1000)
        })
        .catch(function (error){
            console.log(error);
        });
    }
};


function homeTeam(){ //send new post data   
    var email = document.getElementById('email').value;  
    var facebook_url = document.getElementById('facebook_url').value;  
    var twitter_url = document.getElementById('twitter_url').value;  
    var linkedin_url = document.getElementById('linkedin_url').value;  
    var t_member_name = document.getElementById('t_member_name').value;  
    var designation = document.getElementById('designation').value;  
    var desc = document.getElementById('desc').value;  
    // image 
    var fileLength = document.getElementById('image-upload').files.length; 

    if(fileLength == 0){
        iziToast.error({
            title: 'Insert Team Member Image',
            position: 'topRight'
        });
    }  
    else if(t_member_name == ''){
        iziToast.error({
            title: 'Name is Required',
            position: 'topRight'
        });
    }  
    else if(designation == ''){
        iziToast.error({
            title: 'Designation is required',
            position: 'topRight'
        });
    }  
    else if(desc == ''){
        iziToast.error({
            title: 'Description is required',
            position: 'topRight'
        });
    }  
    else{ 
        var file = document.getElementById('image-upload').files[0];
        var fileName = file.name;
        var fileSize = file.size;
        var fileFormate = fileName.split('.').pop();
        let FileData = new FormData();

        FileData.append('FileKey', file); 
        FileData.append('email',email);     
        FileData.append('facebook_url',facebook_url);     
        FileData.append('twitter_url',twitter_url);     
        FileData.append('linkedin_url',linkedin_url);     
        FileData.append('t_member_name',t_member_name);     
        FileData.append('designation',designation);     
        FileData.append('desc',desc);     

        let config = {headers:{'content-type':'multipart/form-data'}};
    

        var url = "/administrator/home/team-add";
        axios.post(url,FileData,config)
        .then(function(response){
           document.getElementById('success-msg').style.display = 'block';
           iziToast.success({
                title: 'Team Member Add Success',
                position: 'topRight'
            });
            setTimeout(function(){
               window.location.href = "/administrator/home/team";
          },1000)
        })
        .catch(function (error){
            console.log(error);
        });
    }
};