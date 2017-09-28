<?php

namespace Ivoz\Provider\Domain\Model\MatchListPattern;

use Ivoz\Core\Domain\Model\EntityInterface;

interface MatchListPatternInterface extends EntityInterface
{
    /**
     * Get Number value in E.164 format
     * @param $prefix string
     */
    public function getNumberE164($prefix = null);

    /**
     * Set description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description = null);

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();

    /**
     * Set type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType($type);

    /**
     * Get type
     *
     * @return string
     */
    public function getType();

    /**
     * Set regexp
     *
     * @param string $regexp
     *
     * @return self
     */
    public function setRegexp($regexp = null);

    /**
     * Get regexp
     *
     * @return string
     */
    public function getRegexp();

    /**
     * Set numbervalue
     *
     * @param string $numbervalue
     *
     * @return self
     */
    public function setNumbervalue($numbervalue = null);

    /**
     * Get numbervalue
     *
     * @return string
     */
    public function getNumbervalue();

    /**
     * Set matchList
     *
     * @param \Ivoz\Provider\Domain\Model\MatchList\MatchListInterface $matchList
     *
     * @return self
     */
    public function setMatchList(\Ivoz\Provider\Domain\Model\MatchList\MatchListInterface $matchList = null);

    /**
     * Get matchList
     *
     * @return \Ivoz\Provider\Domain\Model\MatchList\MatchListInterface
     */
    public function getMatchList();

    /**
     * Set numberCountry
     *
     * @param \Ivoz\Provider\Domain\Model\Country\CountryInterface $numberCountry
     *
     * @return self
     */
    public function setNumberCountry(\Ivoz\Provider\Domain\Model\Country\CountryInterface $numberCountry = null);

    /**
     * Get numberCountry
     *
     * @return \Ivoz\Provider\Domain\Model\Country\CountryInterface
     */
    public function getNumberCountry();

}
