function actionDelete(event) {
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);
    Swal.fire({
        title: 'Bạn có chắc chắn muốn xóa không?',
        text: "Bạn sẽ không thể khôi phục nó!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().fadeOut(2000);
                        Swal.fire(
                            'Đã xóa!',
                            'Xóa thành công.',
                            'success'
                        )
                    }
                },
                error: function (data) {
                    Swal.fire(
                        'Lỗi ' + data.status,
                        'Xóa thất bại.',
                        'error'
                    )
                }
            })
        }
    })
}
$(function () {
    $(document).on('click', '.action_delete', actionDelete);
})