<?php
    class PWLogo {
        public static function onParserSetup(&$parser) {
            $parser->setFunctionHook( 'pwlogo', 'PWLogo::renderLogo' );
        }

        public static function renderLogo($parser) {
            return array(
                file_get_contents(__DIR__ . '/pw-logo.svg'),
                'noparse' => true, 'isHTML' => true
            );
        }
    }
?>
