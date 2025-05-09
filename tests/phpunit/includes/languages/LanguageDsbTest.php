<?php
/**
 * @author Santhosh Thottingal
 * @copyright Copyright © 2012, Santhosh Thottingal
 * @file
 */

/**
 * @group Language
 * @covers \LanguageDsb
 */
class LanguageDsbTest extends LanguageClassesTestCase {
	/**
	 * @dataProvider providePlural
	 * @covers \MediaWiki\Language\Language::convertPlural
	 */
	public function testPlural( $result, $value ) {
		$forms = [ 'one', 'two', 'few', 'other' ];
		$this->assertEquals( $result, $this->getLang()->convertPlural( $value, $forms ) );
	}

	/**
	 * @dataProvider providePlural
	 * @covers \MediaWiki\Language\Language::getPluralRuleType
	 */
	public function testGetPluralRuleType( $result, $value ) {
		$this->assertEquals( $result, $this->getLang()->getPluralRuleType( $value ) );
	}

	public static function providePlural() {
		return [
			[ 'other', 0 ],
			[ 'one', 1 ],
			[ 'one', 101 ],
			[ 'one', 90001 ],
			[ 'two', 2 ],
			[ 'few', 3 ],
			[ 'few', 203 ],
			[ 'few', 4 ],
			[ 'other', 99 ],
			[ 'other', 555 ],
		];
	}

	/**
	 * @dataProvider provideConvertGrammar
	 */
	public function testConvertGrammar( string $word, string $case, string $expected ): void {
		$this->assertSame( $expected, $this->getLang()->convertGrammar( $word, $case ) );
	}

	public static function provideConvertGrammar(): iterable {
		yield [ 'word', 'nominatiw', 'word' ];
		yield [ 'word', 'instrumental', 'wo z word' ];
		yield [ 'word', 'lokatiw', 'wo word' ];
	}
}
