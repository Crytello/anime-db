$(function() {
    $('span.modalButton').click(
        function() {
            var mySpan = this;
            var target = this.dataset.modaltarget;
            var title  = this.dataset.modaltitle;
            var modalContainer = $('#genericModal');
            modalContainer.find('.modal-title').html(title);
            modalContainer.find('.generic-modal-body').load(target);
            modalContainer.modal('show');
        }
    );
});
// SAVES THE ENTRY WHEN STORING OR UPDATING
function saveEntry() {
    var modalContainer = $('#genericModal');
    var modalForm = modalContainer.find('form');
    var form = document.forms.namedItem("genericModal");
    if (modalForm.valid()) {
        var formdata = new FormData(form);
        console.log(formdata);
        $.ajax({
            url: modalForm.attr('action'),
            type: 'post',
            data: formdata,
            processData: false,
            contentType: false,
            ignore: [],
            success: function (data) {
                modalContainer.delay(2000).modal('hide');
                location.reload();
                modalContainer.find('.modal-body').html(data);
            },
            error: function (xhr, status, error) {
                if (xhr.status == 422) {
                    var $eDiv = modalContainer.find('.modal-body div[role="alert"]');
                    if ($eDiv.length == 0) {
                        $eDiv = $('<div class="alert-danger"role="alert"></div>');
                        modalContainer.find('.modal-body.generic-modal-body').prepend($eDiv);
                    } else {
                        $eDiv.html('');
                    }
                    for (text in xhr.responseJSON.errors) {
                        $eDiv.append(xhr.responseJSON.errors[text] + '<br>')
                    }
                    console.log("didn't work");
                }
            }
        });
    }
}