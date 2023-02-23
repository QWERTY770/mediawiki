<?php
/**
 * StatsD Wire Format Implementation
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @license GPL-2.0-or-later
 * @author Cole White
 * @since 1.41
 */

declare( strict_types=1 );

namespace Wikimedia\Metrics\Formatters;

class StatsdFormatter implements FormatterInterface {
	/** @inheritDoc */
	public function getFormattedSamples( string $prefix, $metric ): array {
		$output = [];
		foreach ( $metric->getSamples() as $sample ) {

			// dot-separate prefix, component, name, and label values `prefix.component.name.value1.value2`
			$stat = implode( '.',
				array_merge( [ $prefix, $metric->getComponent(), $metric->getName() ], $sample->getLabelValues() )
			);

			// merge value with separator `:42`
			$value = ':' . $sample->getValue();

			// merge type indicator with separator `|c`
			$type = '|' . $metric->getTypeIndicator();

			// blank string if samplerate is 1.0, otherwise add samplerate indicator `|@0.5`
			$sampleRate = $metric->getSampleRate() !== 1.0 ? '|@' . $metric->getSampleRate() : '';

			// combine and append to output `prefix.component.name.value1.value2:42|c|@0.5`
			$output[] = $stat . $value . $type . $sampleRate;
		}
		return $output;
	}
}
