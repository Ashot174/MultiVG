// $(document).ready(function() {
//     $('.deleteArticle').click(function(e) {
//         e.preventDefault();
//         var id = $(this).attr("id");
//         if (confirm("Are you sure you want to delete this Member?")) {
//             $.ajax({
//                  type: "DELETE",
//                 url: "article/destroy/"+id,
//                 data: /*$('.deleteArticle').serialize(),*/
//                     ({
//                     "id": id,
//                     "_method": 'delete',
//                 }),
//                 // cache: false,
//                 success: function() {
//                     // console.log(response);
//                     // $(this).parents(".delete_mem"+id).fadeOut('slow');
//                     alert('Data deleted');
//                 },
//                 error:function () {
//                     alert('jkhjhhjb');
//                 }
//             });
//         } else {
//             return false;
//         }
//     });
// });

// $(document).ready(function() {
//     $(document).on('click', '.delete', function(){
//         let id = $(this).attr('id');
//         // let token = $('meta[name="csrf-token"]').attr('content');
//         if(confirm("Are you sure you want to Delete this article?"))
//         {
//             $.ajax({
//                 headers: {
//                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                 },
//                 url:"/admin/article/"+id,
//                 method:'Post',
//                 data:{
//                     id:id,
//                     // // _token:token,
//                      _method:'delete'
//                 },
//                 cache: false,
//                 success:function()
//                 {
//                     $('.delete_mem'+id).remove();
//                     // alert('hubhhg');
//                 },
//                 error: function(xhr) {
//                     console.log(xhr.responseText);
//                 }
//             })
//         }
//         else
//         {
//             return false;
//         }
//     });
//
// });

// $(document).ready(function() {
//     $(document).on('click', '.deleteUser', function(){
//         let id = $(this).attr('id');
//         // let token = $('meta[name="csrf-token"]').attr('content');
//         if(confirm("Are you sure you want to Delete this User?"))
//         {
//             $.ajax({
//                 headers: {
//                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                 },
//                 url:"/admin/user/"+id,
//                 method:'Post',
//                 data:{
//                     id:id,
//                     // // _token:token,
//                     _method:'delete'
//                 },
//                 cache: false,
//                 success:function()
//                 {
//                     // $('.delete_memUser'+id).remove();
//                      alert('hubhhg');
//                 },
//                 error: function(xhr) {
//                     console.log(xhr.responseText);
//                 }
//             })
//         }
//         else
//         {
//             alert('bhbjh');
//             return false;
//         }
//     });
// });




// $(".deleteArticle").click(function(){
//     let id = $(this).attr("id");
//     let token = $(this).data("token");
//     $.ajax(
//         {
//             url: "admin/article/destroy/"+id,
//             type: 'DELETE',
//             dataType: "JSON",
//             data: {
//                 "id": id,
//                 "_method": 'DELETE',
//                 "_token": token,
//             },
//             success: function ()
//             {
//                 console.log("it Work");
//             }
//         });
//
//     console.log("It failed");
// });

// $(function() {
//
//     $(".deleteArticle").click(function() {
//         var del_id = $(this).attr("id");
//         var info = 'id=' + del_id;
//         if (confirm("Sure you want to delete this post? This cannot be undone later.")) {
//             $.ajax({
//                 type : "POST",
//                 url : "admin/article/destroy/"+id, //URL to the delete php script
//                 data : info,
//                 success : function() {
//                 }
//             });
//             $(this).parents(".record").animate("fast").animate({
//                 opacity : "hide"
//             }, "slow");
//         }
//         return false;
//     });
// });


