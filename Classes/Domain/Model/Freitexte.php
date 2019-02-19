<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Freitexte
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("freitexte")
 */
class Freitexte implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $ausstattBeschr;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $dreizeiler;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $immobilie;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $lage;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $objektbeschreibung;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\ObjektText") 
	 * @var ObjektText
	 */
	protected $objektText;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $objekttitel;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $sonstigeAngaben;

	/**
	 * @XmlList (inline = true, entry = "user_defined_anyfield") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedAnyfield>") 
	 * @var UserDefinedAnyfield[]
	 */
	protected $userDefinedAnyfield;

	/**
	 * @XmlList (inline = true, entry = "user_defined_extend") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedExtend>") 
	 * @var UserDefinedExtend[]
	 */
	protected $userDefinedExtend;

	/**
	 * @XmlList (inline = true, entry = "user_defined_simplefield") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedSimplefield>") 
	 * @var UserDefinedSimplefield[]
	 */
	protected $userDefinedSimplefield;

	/**
	 * @return string
	 */
	public function getAusstattBeschr(): string {
		return $this->ausstattBeschr;
	}

	/**
	 * @return string
	 */
	public function getDreizeiler(): string {
		return $this->dreizeiler;
	}

	/**
	 * @return int
	 */
	public function getImmobilie(): int {
		return $this->immobilie;
	}

	/**
	 * @return string
	 */
	public function getLage(): string {
		return $this->lage;
	}

	/**
	 * @return string
	 */
	public function getObjektbeschreibung(): string {
		return $this->objektbeschreibung;
	}

	/**
	 * @return ObjektText
	 */
	public function getObjektText(): ObjektText {
		return $this->objektText;
	}

	/**
	 * @return string
	 */
	public function getObjekttitel(): string {
		return $this->objekttitel;
	}

	/**
	 * @return string
	 */
	public function getSonstigeAngaben(): string {
		return $this->sonstigeAngaben;
	}

	/**
	 * Returns array of UserDefinedAnyfield
	 *
	 * @return array
	 */
	public function getUserDefinedAnyfield(): array {
		return $this->userDefinedAnyfield;
	}

	/**
	 * Returns array of UserDefinedExtend
	 *
	 * @return array
	 */
	public function getUserDefinedExtend(): array {
		return $this->userDefinedExtend;
	}

	/**
	 * Returns array of UserDefinedSimplefield
	 *
	 * @return array
	 */
	public function getUserDefinedSimplefield(): array {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @param string $ausstattBeschr Setter for ausstattBeschr
	 * @return Freitexte
	 */
	public function setAusstattBeschr(string $ausstattBeschr): Freitexte {
		$this->ausstattBeschr = $ausstattBeschr;
		return $this;
	}

	/**
	 * @param string $dreizeiler Setter for dreizeiler
	 * @return Freitexte
	 */
	public function setDreizeiler(string $dreizeiler): Freitexte {
		$this->dreizeiler = $dreizeiler;
		return $this;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return Freitexte
	 */
	public function setImmobilie(int $immobilie) {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param string $lage Setter for lage
	 * @return Freitexte
	 */
	public function setLage(string $lage): Freitexte {
		$this->lage = $lage;
		return $this;
	}

	/**
	 * @param string $objektbeschreibung Setter for objektbeschreibung
	 * @return Freitexte
	 */
	public function setObjektbeschreibung(string $objektbeschreibung): Freitexte {
		$this->objektbeschreibung = $objektbeschreibung;
		return $this;
	}

	/**
	 * @param ObjektText $objektText Setter for objektText
	 * @return Freitexte
	 */
	public function setObjektText(ObjektText $objektText): Freitexte {
		$this->objektText = $objektText;
		return $this;
	}

	/**
	 * @param string $objekttitel Setter for objekttitel
	 * @return Freitexte
	 */
	public function setObjekttitel(string $objekttitel): Freitexte {
		$this->objekttitel = $objekttitel;
		return $this;
	}

	/**
	 * @param string $sonstigeAngaben Setter for sonstigeAngaben
	 * @return Freitexte
	 */
	public function setSonstigeAngaben(string $sonstigeAngaben): Freitexte {
		$this->sonstigeAngaben = $sonstigeAngaben;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Freitexte
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield): Freitexte {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Freitexte
	 */
	public function setUserDefinedExtend(array $userDefinedExtend): Freitexte {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Freitexte
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield): Freitexte {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}
