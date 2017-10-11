<?php

namespace Ivoz\Provider\Domain\Model\Service;

use Assert\Assertion;
use Ivoz\Core\Application\DataTransferObjectInterface;

/**
 * ServiceAbstract
 * @codeCoverageIgnore
 */
abstract class ServiceAbstract
{
    /**
     * @var string
     */
    protected $iden = '';

    /**
     * @var string
     */
    protected $defaultCode;

    /**
     * @var boolean
     */
    protected $extraArgs = '0';

    /**
     * @var Name
     */
    protected $name;

    /**
     * @var Description
     */
    protected $description;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct(
        $iden,
        $defaultCode,
        $extraArgs,
        Name $name,
        Description $description
    ) {
        $this->setIden($iden);
        $this->setDefaultCode($defaultCode);
        $this->setExtraArgs($extraArgs);
        $this->setName($name);
        $this->setDescription($description);

        $this->initChangelog();
    }

    /**
     * @param string $fieldName
     * @return mixed
     * @throws \Exception
     */
    public function initChangelog()
    {
        $values = $this->__toArray();
        if (!$this->getId()) {
            // Empty values for entities with no Id
            foreach ($values as $key => $val) {
                $values[$key] = null;
            }
        }

        $this->_initialValues = $values;
    }

    /**
     * @param string $fieldName
     * @return mixed
     * @throws \Exception
     */
    public function hasChanged($fieldName)
    {
        if (!array_key_exists($fieldName, $this->_initialValues)) {
            throw new \Exception($fieldName . ' field was not found');
        }
        $currentValues = $this->__toArray();

        return $currentValues[$fieldName] != $this->_initialValues[$fieldName];
    }

    public function getInitialValue($fieldName)
    {
        if (!array_key_exists($fieldName, $this->_initialValues)) {
            throw new \Exception($fieldName . ' field was not found');
        }

        return $this->_initialValues[$fieldName];
    }

    /**
     * @return ServiceDTO
     */
    public static function createDTO()
    {
        return new ServiceDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto ServiceDTO
         */
        Assertion::isInstanceOf($dto, ServiceDTO::class);

        $name = new Name(
            $dto->getNameEn(),
            $dto->getNameEs()
        );

        $description = new Description(
            $dto->getDescriptionEn(),
            $dto->getDescriptionEs()
        );

        $self = new static(
            $dto->getIden(),
            $dto->getDefaultCode(),
            $dto->getExtraArgs(),
            $name,
            $description
        );

        return $self;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto ServiceDTO
         */
        Assertion::isInstanceOf($dto, ServiceDTO::class);

        $name = new Name(
            $dto->getNameEn(),
            $dto->getNameEs()
        );

        $description = new Description(
            $dto->getDescriptionEn(),
            $dto->getDescriptionEs()
        );

        $this
            ->setIden($dto->getIden())
            ->setDefaultCode($dto->getDefaultCode())
            ->setExtraArgs($dto->getExtraArgs())
            ->setName($name)
            ->setDescription($description);


        return $this;
    }

    /**
     * @return ServiceDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setIden($this->getIden())
            ->setDefaultCode($this->getDefaultCode())
            ->setExtraArgs($this->getExtraArgs())
            ->setNameEn($this->getName()->getEn())
            ->setNameEs($this->getName()->getEs())
            ->setDescriptionEn($this->getDescription()->getEn())
            ->setDescriptionEs($this->getDescription()->getEs());
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'iden' => self::getIden(),
            'defaultCode' => self::getDefaultCode(),
            'extraArgs' => self::getExtraArgs(),
            'nameEn' => self::getName()->getEn(),
            'nameEs' => self::getName()->getEs(),
            'descriptionEn' => self::getDescription()->getEn(),
            'descriptionEs' => self::getDescription()->getEs()
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Set iden
     *
     * @param string $iden
     *
     * @return self
     */
    public function setIden($iden)
    {
        Assertion::notNull($iden);
        Assertion::maxLength($iden, 50);

        $this->iden = $iden;

        return $this;
    }

    /**
     * Get iden
     *
     * @return string
     */
    public function getIden()
    {
        return $this->iden;
    }

    /**
     * Set defaultCode
     *
     * @param string $defaultCode
     *
     * @return self
     */
    public function setDefaultCode($defaultCode)
    {
        Assertion::notNull($defaultCode);
        Assertion::maxLength($defaultCode, 3);

        $this->defaultCode = $defaultCode;

        return $this;
    }

    /**
     * Get defaultCode
     *
     * @return string
     */
    public function getDefaultCode()
    {
        return $this->defaultCode;
    }

    /**
     * Set extraArgs
     *
     * @param boolean $extraArgs
     *
     * @return self
     */
    public function setExtraArgs($extraArgs)
    {
        Assertion::notNull($extraArgs);
        Assertion::between(intval($extraArgs), 0, 1);

        $this->extraArgs = $extraArgs;

        return $this;
    }

    /**
     * Get extraArgs
     *
     * @return boolean
     */
    public function getExtraArgs()
    {
        return $this->extraArgs;
    }

    /**
     * Set name
     *
     * @param Name $name
     *
     * @return self
     */
    public function setName(Name $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param Description $description
     *
     * @return self
     */
    public function setDescription(Description $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    // @codeCoverageIgnoreEnd
}

