<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class TelSonstige
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("tel_sonstige")
 */
class TelSonstige implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TELEFONART_TEL_DURCHW = 'TEL_DURCHW';

	/**
	 */
	const TELEFONART_TEL_FAX = 'TEL_FAX';

	/**
	 */
	const TELEFONART_TEL_HANDY = 'TEL_HANDY';

	/**
	 */
	const TELEFONART_TEL_PRIVAT = 'TEL_PRIVAT';

	/**
	 */
	const TELEFONART_TEL_SONSTIGE = 'TEL_SONSTIGE';

	/**
	 */
	const TELEFONART_TEL_ZENTRALE = 'TEL_ZENTRALE';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @var string
	 */
	protected $bemerkung;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $kontaktperson;

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see TELEFONART_* constants
	 * @var string
	 */
	protected $telefonart;

	/**
	 * @Inline 
	 * @Type ("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $weitereAdresse;

	/**
	 * @param string $telefonart Shortcut setter for telefonart
	 * @param string $bemerkung Shortcut setter for bemerkung
	 * @param string $value the actual value
	 */
	public function __construct(string $telefonart = null, string $bemerkung = null, string $value = null) {
		$this->telefonart = $telefonart;
		$this->bemerkung = $bemerkung;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getBemerkung(): string {
		return $this->bemerkung;
	}

	/**
	 * @return int
	 */
	public function getKontaktperson(): int {
		return $this->kontaktperson;
	}

	/**
	 * @return string
	 */
	public function getTelefonart(): string {
		return $this->telefonart;
	}

	/**
	 * @return string
	 */
	public function getValue(): string {
		return $this->value;
	}

	/**
	 * @return int
	 */
	public function getWeitereAdresse(): int {
		return $this->weitereAdresse;
	}

	/**
	 * @param string $bemerkung Setter for bemerkung
	 * @return TelSonstige
	 */
	public function setBemerkung(string $bemerkung): TelSonstige {
		$this->bemerkung = $bemerkung;
		return $this;
	}

	/**
	 * @param int $kontaktperson Setter for kontaktperson
	 * @return TelSonstige
	 */
	public function setKontaktperson(int $kontaktperson): TelSonstige {
		$this->kontaktperson = $kontaktperson;
		return $this;
	}

	/**
	 * @param string $telefonart Setter for telefonart
	 * @return TelSonstige
	 */
	public function setTelefonart(string $telefonart): TelSonstige {
		$this->telefonart = $telefonart;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return TelSonstige
	 */
	public function setValue(string $value): TelSonstige {
		$this->value = $value;
		return $this;
	}

	/**
	 * @param int $weitereAdresse Setter for weitereAdresse
	 * @return TelSonstige
	 */
	public function setWeitereAdresse(int $weitereAdresse) {
		$this->weitereAdresse = $weitereAdresse;
		return $this;
	}
}
