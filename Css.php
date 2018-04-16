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

    }
    
?>