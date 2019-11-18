(function($) {

  RemoveTableRow = function(handler) {
    var tr = $(handler).closest('tr');

    tr.fadeOut(400, function(){ 
      tr.remove(); 
    }); 

    return false;
  };
  
  AddTableRow = function() {
      
      var newRow = $("<tr>");
      var cols = "";
  
      cols += '<th>' + $('#descricao').val() + '<input type="hidden" name="descricao[]"value="'+$('#descricao').val()+'"/></th>';

      cols += '<th>' + $('#qtd').val() + '<input type="hidden" name="Qtd[]"value="'+$('#qtd').val()+'"/></th>'; 
      
      cols += '<th>' + $('#punid').val() + '<input type="hidden" name="punid[]"value="'+$('#punid').val()+'"/></th>'; 
    
      cols +='<th>' + $('#montante').val() + '<input type="hidden" name="montante[]"value="'+$('#montante').val()+'"/></th>';
      
      cols += '<td class="actions">';
      cols += '<button class="btn btn-large btn-danger" onclick="RemoveTableRow(this)" type="button">Remover</button>';
      cols += '</td>';
      
      newRow.append(cols);
      // var x = parseInt($("#total").attr('value'));
      // var y =parseInt($("#subtotal").attr('value'));
       var x = $(this).attr('#total'); 
       var y = $(this).attr('#subtotal'); 
      var z = y+x;
     
//var total = parseInt($("#total").attr('value')) + 1;

      $('#total').val(z);
      
      $("#descricao-req").append(newRow);

      return false;
  };

 

})(jQuery);