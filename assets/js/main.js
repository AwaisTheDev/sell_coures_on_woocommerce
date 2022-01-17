jQuery(document).ready(function($){

    var items = document.querySelectorAll(".sp-course-menu a");

    items.forEach(item => {
        //console.log(item);
        
        $(item).click(function(e){

            e.preventDefault();

            items.forEach(innerItem => {
                $(innerItem).removeClass("active");
                var newElement = $(innerItem).attr('id');
                $('.'+newElement).removeClass("active");

            });

            var newElement = $(this).attr('id');
            $(item).addClass("active");
            $('.'+newElement).addClass("active");
        })
    });
    
});