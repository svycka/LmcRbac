<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace ZfcRbac\Options;

use Zend\Stdlib\AbstractOptions;

/**
 * Options for ZfcRbac module
 */
class ModuleOptions extends AbstractOptions
{
    /**
     * DO NOT CHANGE THIS
     *
     * @var bool
     */
    protected $__strictMode__ = false;

    /**
     * Key of the identity provider used to retrieve the identity
     *
     * @var string
     */
    protected $identityProvider = 'ZfcRbac\Identity\AuthenticationIdentityProvider';

    /**
     * Should the RBAC container automatically create roles for missing roles?
     *
     * @var bool
     */
    protected $createMissingRoles = true;

    /**
     * Guest role (used when no identity is found)
     *
     * @var string
     */
    protected $guestRole = 'guest';

    /**
     * Default role (used when identity is found, but has no role attached)
     *
     * @var string
     */
    protected $defaultRole = 'member';

    /**
     * Guards options
     *
     * @var GuardsOptions|null
     */
    protected $guards;

    /**
     * Options for the unauthorized strategy
     *
     * @var UnauthorizedStrategyOptions|null
     */
    protected $unauthorizedStrategy;

    /**
     * Options for the redirect strategy
     *
     * @var RedirectStrategyOptions|null
     */
    protected $redirectStrategy;

    /**
     * Set the key of the identity provider used to retrieve the identity
     *
     * @param  string $identityProvider
     * @return void
     */
    public function setIdentityProvider($identityProvider)
    {
        $this->identityProvider = (string) $identityProvider;
    }

    /**
     * Get the key of the identity provider used to retrieve the identity
     *
     * @return string
     */
    public function getIdentityProvider()
    {
        return $this->identityProvider;
    }

    /**
     * Should the RBAC container automatically create roles for missing roles?
     *
     * @param boolean $createMissingRoles
     */
    public function setCreateMissingRoles($createMissingRoles)
    {
        $this->createMissingRoles = (bool) $createMissingRoles;
    }

    /**
     * Retrieve if the RBAC container should automatically create roles for missing roles
     *
     * @return boolean
     */
    public function getCreateMissingRoles()
    {
        return $this->createMissingRoles;
    }

    /**
     * Set the guest role (used when no identity is found)
     *
     * @param string $guestRole
     */
    public function setGuestRole($guestRole)
    {
        $this->guestRole = (string) $guestRole;
    }

    /**
     * Get the guest role (used when no identity is found)
     *
     * @return string
     */
    public function getGuestRole()
    {
        return $this->guestRole;
    }

    /**
     * Set the default role (used when identity is found, but has no role attached)
     *
     * @param string $defaultRole
     */
    public function setDefaultRole($defaultRole)
    {
        $this->defaultRole = (string) $defaultRole;
    }

    /**
     * Get the default role (used when identity is found, but has no role attached)
     *
     * @return string
     */
    public function getDefaultRole()
    {
        return $this->defaultRole;
    }

    /**
     * Set the guards options
     *
     * @param  array $guards
     * @return void
     */
    public function setGuards(array $guards)
    {
        $this->guards = new GuardsOptions($guards);
    }

    /**
     * Get the guards options
     *
     * @return GuardsOptions
     */
    public function getGuards()
    {
        return $this->guards;
    }

    /**
     * Set the unauthorized strategy options
     *
     * @param array $unauthorizedStrategy
     */
    public function setUnauthorizedStrategy(array $unauthorizedStrategy)
    {
        $this->unauthorizedStrategy = new UnauthorizedStrategyOptions($unauthorizedStrategy);
    }

    /**
     * Get the unauthorized strategy options
     *
     * @return UnauthorizedStrategyOptions
     */
    public function getUnauthorizedStrategy()
    {
        return $this->unauthorizedStrategy;
    }

    /**
     * Set the redirect strategy options
     *
     * @param array $redirectStrategy
     */
    public function setRedirectStrategy(array $redirectStrategy)
    {
        $this->redirectStrategy = new RedirectStrategyOptions($redirectStrategy);
    }

    /**
     * Get the redirect strategy options
     *
     * @return RedirectStrategyOptions
     */
    public function getRedirectStrategy()
    {
        return $this->redirectStrategy;
    }
} 