<?php declare(strict_types=1);

namespace TgI18n;

use PHPUnit\Framework\TestCase;

/**
 * Tests the I18N localization.
 * @author ralph
 *
 */
final class I18NTest extends TestCase {

	public function testFindEmptyLocalization(): void {
	    I18N::reset();
	    $this->assertEquals('testKey', I18N::_('testKey'));
	    $this->assertNull(I18N::__('testKey'));
	}
	
	public function testLocalization(): void {
	    I18N::reset();
	    I18N::$i18nFile = __DIR__.'/i18n.php';
	    $this->assertEquals('testValue-EN', I18N::_('testKey'));
	    $this->assertEquals('testValue-DE', I18N::_('testKey', 'de'));
	    $this->assertEquals('testKey2',     I18N::_('testKey2'));
	}
}