<?php
declare(strict_types=1);
namespace Bitmotion\SecureDownloads\Parser;

/***
 *
 * This file is part of the "Secure Downloads" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Florian Wessels <f.wessels@bitmotion.de>, Bitmotion GmbH
 *
 ***/

interface HtmlParserDelegateInterface
{
    public function publishResourceUri(string $resourceUri): string;
}
