<?php
    /**
     * Classe com algumas funções Css
     */
    class Css {
        
        function __construct($argument) {
            
        }
		function MudarCorTarjaMenu(){
			?>
				<style type="text/css">
					.scMenuHTableCss {
						background-color: #d3dbd3;
					}				
				</style>
			<?php
		}
		function MudarCorHeader(){
		?>
		<style type = "text/css">
			.scFormHeader {
				//background-color: #4d7ca0;
				background-color: #253B5B;
				background-image: none;
				opacity: 1;
				filter: alpha(opacity=100);
				border-color: #0099C0;
				border-style: solid;
				border-width: 1px;
			}
			.scGridHeader {
				//background-color: #4d7ca0;
				background-color: #253B5B;
				background-image: none;
				opacity: 1;
				filter: alpha(opacity=100);
				border-color: #0099C0;
				border-style: solid;
				border-width: 1px;
			}
			.scMenuTHeader {				
				//background-color: #4d7ca0;
				background-color: #253B5B;
				background-image: none;
				opacity: 1;
				filter: alpha(opacity=100);
				border-color: #4d7ca0;
				border-style: solid;
				border-width: 1px;
				border-collapse: collapse;
			}
			.scFilterHeader {
				background-color: #253B5B;
				background-image: none;
				opacity: 1;
				filter: alpha(opacity=100);
				border-color: #253B5B;
				border-style: solid;
				border-width: 1px;
			}
		</style>
		<?php
	}
		function MascararTelefone($campo){
			?>
			<script>
				$(document).ready(function(){
				jQuery("input.'+ <? echo $campo;?> +'")
				        .mask("(99) 9999-9999?9")
				        .focusout(function (event) {  
				            var target, phone, element;  
				            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
				            phone = target.value.replace(/\D/g, '');
				            element = $(target);  
				            element.unmask();  
				            if(phone.length > 10) {  
				                element.mask("(99) 99999-999?9");  
				            } else {  
				                element.mask("(99) 9999-9999?9");  
				            }  
				        });
				});
			</script>
			<?php
		}
		function AlturaBloco($altura,$nome){
			?>
				<style type="text/css">
					<? echo $nome; ?> {
						heigth:<? echo $altura; ?>;
					}				
				</style>
			<?php
		}    
}
    
?>