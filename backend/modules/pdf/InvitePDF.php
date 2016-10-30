<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 30.10.2016
 * Time: 11:33
 */

namespace backend\modules\pdf;

use common\models\Member;
use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;

class InvitePDF
{
    /**
     * @var Dompdf
     */
    private $dompdf;

    private $paperFormat = 'A4';

    function __construct(Dompdf $dompdf)
    {
        $this->dompdf = $dompdf;
    }

    public function create($content)
    {

    }


} 