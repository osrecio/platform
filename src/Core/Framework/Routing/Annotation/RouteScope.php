<?php declare(strict_types=1);

namespace Shopware\Core\Framework\Routing\Annotation;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationAnnotation;

/**
 * @deprecated tag:v6.5.0 - Use route defaults with "_routeScope". Example: @Route(defaults={"_routeScope"={"storefront"}})
 * @Annotation
 *
 * @Attributes({
 *   @Attribute("scopes",  type = "array"),
 * })
 */
class RouteScope extends ConfigurationAnnotation
{
    /**
     * @var array
     */
    private $scopes;

    /**
     * @return string
     */
    public function getAliasName()
    {
        return 'routeScope';
    }

    /**
     * @return bool
     */
    public function allowArray()
    {
        return false;
    }

    public function getScopes(): array
    {
        return $this->scopes;
    }

    public function setScopes(array $scopes): void
    {
        $this->scopes = $scopes;
    }

    public function hasScope(string $scopeName): bool
    {
        return \in_array($scopeName, $this->scopes, true);
    }
}
