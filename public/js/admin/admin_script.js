$(document).ready(function(){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});


        // confirm delete with sweetalert
        $(document).on("click",".confirmDelete",function(){
            var record = $(this).attr("record");
            var recordid = $(this).attr("recordid");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                width: 600,
                padding: '3em',
                backdrop: `rgba(0,0,123,0.4) url("https://sweetalert2.github.io/images/nyan-cat.gif") left top no-repeat`
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href="/admin/delete-"+record+"/"+recordid;
                }
              });
        });


});
