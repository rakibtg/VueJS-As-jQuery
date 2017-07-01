new Vue( {
    el: '.vue-commenting',
    template: '#add-comment-template',
    data: {
        visibleForm: false,
        name: '',
        comment: '',
    },
    methods: {
        ToggleReplyForm: function ( event ) {
            event.preventDefault()
            this.visibleForm = ! this.visibleForm
        },
        PostComment: function ( event ) {
            event.preventDefault()
            console.log( this.name )
            console.log( this.comment )
            this.name = ''
            this.comment = ''
        }
    }
} )