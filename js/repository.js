let logout = document.getElementById('logout');
logout.addEventListener('click', () => {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger"
        },
        buttonsStyling: true
    });
    swalWithBootstrapButtons.fire({
        title: "Logout",
        icon: "warning",
        text: "Are you sure?",
        showCancelButton: true,
        confirmButtonText: "Yes, i'm going out",
        cancelButtonText: "No, i want to stay",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "../scripts/authentication/logout.php";
        }
    });
});