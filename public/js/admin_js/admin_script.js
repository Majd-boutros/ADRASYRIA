$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //Confirm Delete any item using sweet alert
    $(document).on("click",".confirmDelete",function (){
        var record = $(this).attr('record');
        var recordid = $(this).attr('recordid');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
                window.location.href="/admin/delete-"+record+"/"+recordid;
            }
        });
        return false;
    });


    //Admin Details
    $('#currentPassword').keyup(function (){
        var current_pwd = $('#currentPassword').val();
        $.ajax({
            url: '/admin/check-current-password',
            type: 'POST',
            data: {
                "current_pwd": current_pwd
            },
            success: function (res){
                if(res.success == false){
                    $('#chkCurrentPwd').html("<font color=red>Current password is incorrect</font>");
                }else {
                    $('#chkCurrentPwd').html("<font color=green>Current password is correct</font>");
                }
            },
            error: function (err){
                console.log(err);
            }
        });
    });

    //Update Image Carousel Status
    $(document).on('click','.updateImageCarouselStatus',function (){
        var status = $(this).children('i').attr('status');
        var carousel_id = $(this).attr('carousel_id');
        $.ajax({
            url: '/admin/update-image-carousel-status',
            type: 'POST',
            data: {
                "carousel_id": carousel_id,
                "status": status
            },
            success: function (res){
                if(res.success == true){
                    if(res.status == 1){
                        var icon = `<i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i>`;
                        $('#carousel-'+carousel_id).html(icon);
                    }else if(res.status == 0){
                        var icon = `<i class="fas fa-toggle-off" aria-hidden="true" status="Inactive"></i>`;
                        $('#carousel-'+carousel_id).html(icon);
                    }
                }
            },
        });
    });

    //Update Impact Status
    $(document).on('click','.updateImpactStatus',function (){
        var status = $(this).children('i').attr('status');
        var impact_id = $(this).attr('impact_id');
        $.ajax({
            url: '/admin/update-impact-status',
            type: 'POST',
            data: {
                "impact_id": impact_id,
                "status": status
            },
            success: function (res){
                if(res.success == true){
                    if(res.status == 1){
                        var icon = `<i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i>`;
                        $('#impact-'+impact_id).html(icon);
                    }else if(res.status == 0){
                        var icon = `<i class="fas fa-toggle-off" aria-hidden="true" status="Inactive"></i>`;
                        $('#impact-'+impact_id).html(icon);
                    }
                }
            },
        });
    });

    //Update Category Status
    $(document).on('click','.updateCategoryStatus',function (){
        var status = $(this).children('i').attr('status');
        var category_id = $(this).attr('category_id');
        $.ajax({
            url: '/admin/update-category-status',
            type: 'POST',
            data: {
                "category_id": category_id,
                "status": status
            },
            success: function (res){
                if(res.success == true){
                    if(res.status == 1){
                        var icon = `<i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i>`;
                        $('#category-'+category_id).html(icon);
                    }else if(res.status == 0){
                        var icon = `<i class="fas fa-toggle-off" aria-hidden="true" status="Inactive"></i>`;
                        $('#category-'+category_id).html(icon);
                    }
                }
            },
        });
    });

    //Update Donor Status
    $(document).on('click','.updateDonorStatus',function (){
        var status = $(this).children('i').attr('status');
        var donor_id = $(this).attr('donor_id');
        $.ajax({
            url: '/admin/update-donor-status',
            type: 'POST',
            data: {
                "donor_id": donor_id,
                "status": status
            },
            success: function (res){
                if(res.success == true){
                    if(res.status == 1){
                        var icon = `<i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i>`;
                        $('#donor-'+donor_id).html(icon);
                    }else if(res.status == 0){
                        var icon = `<i class="fas fa-toggle-off" aria-hidden="true" status="Inactive"></i>`;
                        $('#donor-'+donor_id).html(icon);
                    }
                }
            },
        });
    });

});
