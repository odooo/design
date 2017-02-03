<?php

/*
 * This file is part of the ni-ju-san CMS.
 *
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\DompdfBundle\Wrapper;

use Dompdf\Dompdf;
use Dompdf\Options;

class DompdfWrapper
{
    /**
     * @var string
     */
    private $basePath;

    /**
     * @var string[]
     */
    private $options;

    /**
     * @param string   $basePath
     * @param string[] $options
     */
    public function __construct($basePath, array $options = array())
    {
        $this->basePath = $basePath;
        $this->options  = $options;
    }

    /**
     * Renders a pdf document and streams it to the browser.
     *
     * @param string    $html         The html sourcecode to render
     * @param string    $filename     The name of the docuemtn
     * @param string[]  $options      The rendering options (see dompdf docs)
     * @param bool|true $replacePaths Appends the basepath to file links
     *
     * @throws \Exception
     */
    public function streamHtml($html, $filename, array $options = array(), $replacePaths = true)
    {
        if ($replacePaths) {
            $html = $this->replaceBasePath($html);
        }

        $pdf = $this->createDompdf();
        $pdf->setOptions($this->createOptions($options));
        $pdf->loadHtml($html);
        $pdf->render();
        $pdf->stream($filename);
    }

    /**
     * Renders a pdf document and return the binary content.
     *
     * @param string    $html         The html sourcecode to render
     * @param array     $options      The rendering options (see dompdf docs)
     * @param bool|true $replacePaths Appends the basepath to file links
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getPdf($html, array $options = array(), $replacePaths = true)
    {
        if ($replacePaths) {
            $html = $this->replaceBasePath($html);
        }

        $pdf = $this->createDompdf();
        $pdf->setOptions($this->createOptions($options));
        $pdf->loadHtml($html);
        $pdf->render();

        return $pdf->output();
    }

    /**
     * Replaces relative paths with absolute paths.
     *
     * @param string $html The html sourcecode
     *
     * @return string Modified html sourcecode
     */
    private function replaceBasePath($html)
    {
        $pattern = '#<([^>]* )(src|href)=([\'"])(?![A-z]*:)([^"]*)([\'"])#';
        $replace = '<$1$2=$3'.$this->basePath.'$4$5';

        return preg_replace($pattern, $replace, $html);
    }

    /**
     * Creates a new Dompdf instance.
     *
     * @return Dompdf
     */
    public function createDompdf()
    {
        return new Dompdf();
    }

    /**
     * Creates a a new Option instance.
     *
     * @param string[] $options An array of dompdf options
     *
     * @return Options
     */
    public function createOptions(array $options = array())
    {
        return new Options(array_merge($this->options, $options));
    }
}
