$(function(){

    $('#templateListingTable').dataTable({
        pageLength : 10,
        lengthChange : true,
        'processing' : true,
        'serverSide' : true,
        'serverMethod': 'post',
        ajax : {
            url : base_url + "backend/emailtemplate/getListing",
            type: "post",
        },
        'columns': [
            { data: 'template_name' }, 
            { data: 'template_subject' },
            { data: 'created_at' },
            { data: 'actions' },
         ]
    });
})