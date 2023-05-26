var deleter = {

    linkSelector          : "a[data-delete]",
    modalTitle            : "Are you sure?",
    modalMessage          : "You will not be able to recover this entry?",
    modalType             : "warning",
    modalCancelButtonText : "İptal",
    modalConfirmButtonColor:"#DD6B55",
    modalConfirmButtonText: "Yes, delete it!",
    laravelToken          : null,
    url                   : "/",

    init: function() {
        $(this.linkSelector).on('click', {self:this}, this.handleClick);
    },

    handleClick: function(event) {
        event.preventDefault();

        var self = event.data.self;
        var link = $(this);

        self.modalTitle             = link.data('title') || self.modalTitle;
        self.modalMessage           = link.data('message') || self.modalMessage;
        self.modalType              = link.data('type') || self.modalType;
        self.modalCancelButtonText  = link.data('cancel-text') || self.modalCancelButtonText;
        self.modalConfirmButtonColor  = link.data('confirm-color') || self.modalConfirmButtonColor;
        self.modalConfirmButtonText = link.data('button-text') || self.modalConfirmButtonText;
        self.url                    = link.attr('href');
        self.laravelToken           = $("meta[name=token]").attr('content');

        self.confirmDelete();

    },

    confirmDelete: function() {
        swal({
            title             : this.modalTitle,
            text              : this.modalMessage,
            type              : this.modalType,
            showCancelButton  : true,
            cancelButtonText  : this.modalCancelButtonText,
            confirmButtonColor: this.modalConfirmButtonColor,
            confirmButtonText : this.modalConfirmButtonText,
            closeOnConfirm    : true,
            closeOnCancel: false
        }).then(function(isConfirm) {
            if (isConfirm.value) {
                this.makeDeleteRequest();
                swal({
                    type: 'success',
                    title: 'Silindi !',
                    text: "Başarıyla silindi.",
                    icon: "success",
                    timer: 5000,
                    showCancelButton: false,
                    showConfirmButton: false
                });
            }
        }.bind(this));
    },

    makeDeleteRequest: function() {

        var form =
            $('<form>', {
                'method': 'DELETE',
                'action': this.url
            });

        var token =
            $('<input>', {
                'type': 'hidden',
                'name': '_token',
                'value': this.laravelToken
            });

        var hiddenInput =
            $('<input>', {
                'name': '_method',
                'type': 'hidden',
                'value': 'DELETE'
            });

        return form.append(token, hiddenInput).appendTo('body').submit();
    }
};

deleter.init();