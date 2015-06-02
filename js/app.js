//ЧЕКБОКСЫ и РАДИО
    var checkboxInit = function(){
        if ($('.checkbox').length) {

            $(document).on('change','input[type="checkbox"]', function(){
                if(this.checked)
                    $(this).parent('label').addClass('in');
                else
                    $(this).parent('label').removeClass('in');
            } );

            if ($('html').hasClass('lt-ie9')) {
                $(document).on('click', '.checkbox label', function(e){
                    var $me = $(this),
                        $input = $me.find('input[type=checkbox]');
                    if (!$input.is(':checked')) {
                        $input.attr('checked','checked');
                        $me.addClass('in');
                    } else {
                        $input.removeAttr('checked');
                        $me.removeClass('in');
                    }
                });
            }
        }
    };
    checkboxInit();


    if ($('.radio').length) {
        $('.radio').on('click', 'label', function (e) {
            e.preventDefault();
            var $label = $(this);
            var targetId = $label.attr('for');
            var $targetInput = $label.find('input');

            $label.parents('.radio').siblings().find('label').removeClass('in');
            $label.addClass('in');


            if ($targetInput.is(':radio')) {
                var name = $targetInput.attr('name');
                if (!$targetInput.is('.checked')) {
                    $('input[name="' + name + '"]').removeClass('checked').removeAttr('checked');
                    $targetInput.addClass('checked').attr('checked', 'checked');
                }
            }
        });
    }
    $('.select').chosen({
        disable_search: true,
        inherit_select_classes: true,
        width: '100%'
    });
    $('.multi-select').chosen({
        disable_search: true,
        inherit_select_classes: true,
        width: '100%'
    });

    $('.js__file-add').on('click', function(e){
      e.preventDefault;
      var $me = $(this),
      $file_input = $me.siblings('input[type="file"]');
      $file_input.click();
      $file_input.on('change', function(){
      $('.file-add-result').html('');
      function formatSize(size) {
        var units = [' Б', ' Кб', ' Мб'];
        if( size < 1024)
          return size + units[0];
        if (size >=1024 && size< 1048576) {
          return Math.ceil(size/1024) + units[1];
        }
        if(size >= 1048576)
          return Math.ceil((size/1024)/1024) + units[2];
        return 'Слишком большой размер файла'
      }
        for(i= 0; i <this.files.length; i++ ){

          $('.file-add-result').append('- '+this.files[i].name + ' <b>'+ formatSize(this.files[i].size) +'</b>' +'<br/>');
        }
      })



    });
