<?php
    namespace Senestr88\document;
	/**
     * PDF Class
     * 
     * (c) John Yusuf Habila <Senestro88@gmail.com>
     * 
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
	 */
	class Document{
		public function __construct(string $document=''){
            $document = strtolower($document);
            if ($document == "pdf") {
                define('FPDF_FONTPATH', realpath(__DIR__)."/tools/fpdf/font");
            }
        }
	}