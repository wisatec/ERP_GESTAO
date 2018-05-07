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
						height:<? echo $altura; ?>;
					}				
				</style>
			<?php
		}    
		function AjustarLabelGrid($padTB,$padLR,$FontSize,$FontBold,$FontColor,$BorderSize,$BorderColor){
			?>
				<style type="text/css">
					.scGridLabelFont {
					    color: <? echo $FontColor; ?>;
					    font-family: Arial, sans-serif;
					    font-size: <? echo $FontSize; ?>;
					    font-weight: <? echo $FontBold; ?>;
					    padding: <? echo $padTB; ?> <? echo $padLR; ?>;
					    text-decoration: none;
					    vertical-align: middle;
					    border-color: <? echo $BorderColor; ?>;
					    border-style: solid;
					    border-width: <? echo $BorderSize; ?>;
					}
					.scFormLabelOddMult {
					    background-color: #D3DBD3;
					    background-image: none;
					    border-color: <? echo $BorderColor; ?>;
					    border-style: solid;
					    border-width: <? echo $BorderSize; ?>;
					    color: <? echo $FontColor; ?>;
					    font-family: Arial, sans-serif;
					    font-size: <? echo $FontSize; ?>;
					    font-weight: <? echo $FontBold; ?>;
					    padding: <? echo $padTB; ?> <? echo $padLR; ?>;
					    text-decoration: none;
					    vertical-align: middle;
					}
				
				</style>
			<?php
			
		}
		function AjustarCelulasGrid($padTB,$padLR,$FontSize,$BorderSize,$BorderColor){
			?>
				<style type="text/css">
					.scGridFieldOddFont {
					    font-family: Arial, sans-serif;
					    font-size: <? echo $FontSize; ?>;
					    padding: <? echo $padTB; ?> <? echo $padLR; ?>;
					    text-decoration: none;
					    border-color: <? echo $BorderColor; ?>;
					    border-style: solid;
					    border-width: 0 0 <? echo $BorderSize; ?> 0;
					}
					.scFormDataOddMult {
					    background-color: #F2F4F7;
					    background-image: none;
					    opacity: 1;
					    filter: alpha(opacity=100);
					    border-color: <? echo $BorderColor; ?>;
					    border-style: solid;
					    border-width: 0 0 <? echo $BorderSize; ?> 0;
					    font-family: Arial, sans-serif;
					    font-size: <? echo $FontSize; ?>;
					    padding: <? echo $padTB; ?> <? echo $padLR; ?>;
					    text-decoration: none;
					}
					.scFormDataFontOddMult {
					    font-family: Arial, sans-serif;
					    font-size: <? echo $FontSize; ?>;
					    text-decoration: none;
					}
					.scFormObjectOddMult, .ui-dropdownchecklist-selector-wrapper > .ui-dropdownchecklist-selector {
					    border-width: <? echo $BorderSize; ?>;
					    font-family: Arial, sans-serif;
					    font-size: <? echo $FontSize; ?>;
					    text-decoration: none;
					    -moz-border-radius: 2px;
					    -webkit-border-radius: 2px;
					    border-radius: 2px;
					}
					.scFormObjectOddMult, .ui-dropdownchecklist-selector-wrapper > .ui-dropdownchecklist-selector{
						font-size: <? echo $FontSize; ?>;	
					}				
				</style>
			<?php
			
		}
}
    
?>