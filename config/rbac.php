<?php

use App\Game\Domain\Enums\Rbac\GameCategoryPermissionEnum;
use App\Game\Domain\Enums\Rbac\GameGamePermissionEnum;
use App\Game\Domain\Enums\Rbac\GamePartnerPermissionEnum;
use App\Tournament\Domain\Enums\Rbac\TournamentScramblePermissionEnum;
use App\Tournament\Domain\Enums\Rbac\TournamentSubscriptionPermissionEnum;
use App\Tournament\Domain\Enums\Rbac\TournamentTournamentPermissionEnum;
use ZnBundle\Geo\Domain\Enums\Rbac\GeoCountryPermissionEnum;
use ZnBundle\Geo\Domain\Enums\Rbac\GeoCurrencyPermissionEnum;
use ZnBundle\Geo\Domain\Enums\Rbac\GeoLocalityPermissionEnum;
use ZnBundle\Geo\Domain\Enums\Rbac\GeoRegionPermissionEnum;
use ZnKaz\Iin\Domain\Enums\Rbac\IinPermissionEnum;
use ZnSandbox\Sandbox\Person2\Domain\Enums\Rbac\ContactTypePermissionEnum;
use ZnSandbox\Sandbox\Person2\Domain\Enums\Rbac\MyChildPermissionEnum;
use ZnSandbox\Sandbox\Person2\Domain\Enums\Rbac\MyContactPermissionEnum;
use ZnSandbox\Sandbox\Person2\Domain\Enums\Rbac\MyPersonPermissionEnum;
use ZnUser\Rbac\Domain\Enums\Rbac\SystemRoleEnum;
use ZnUser\Registration\Domain\Enums\Rbac\UserRegistrationPermissionEnum;
use ZnSandbox\Sandbox\Application\Domain\Enums\Rbac\ApplicationPermissionEnum;
use App\Common\Enums\Rbac\ApplicationRoleEnum;
use App\Common\Enums\Rbac\CommonPermissionEnum;
use App\Money\Domain\Enums\Rbac\MoneyIssuePermissionEnum;
use App\Money\Domain\Enums\Rbac\MoneyRoleEnum;
use App\Money\Domain\Enums\Rbac\MoneyTransactionPermissionEnum;
use App\Money\Domain\Enums\Rbac\MoneyTransferPermissionEnum;
use App\Money\Domain\Enums\Rbac\MoneyWalletPermissionEnum;
use ZnSandbox\Sandbox\Person\Domain\Enums\Rbac\AppPersonPermissionEnum;
use ZnBundle\Dashboard\Domain\Enums\Rbac\DashboardPermissionEnum;
use ZnBundle\Language\Domain\Enums\Rbac\LanguageCurrentPermissionEnum;
use ZnBundle\User\Domain\Enums\Rbac\AppUserPermissionEnum;
use ZnBundle\User\Domain\Enums\Rbac\IdentityPermissionEnum;
use ZnLib\Rpc\Domain\Enums\Rbac\FixturePermissionEnum;
use ZnUser\Rbac\Domain\Enums\Rbac\ExtraPermissionEnum;
use ZnUser\Rbac\Domain\Enums\Rbac\RbacAssignmentEnum;
use ZnUser\Rbac\Domain\Enums\Rbac\RbacItemEnum;
use ZnSandbox\Sandbox\Rpc\Domain\Enums\Rbac\RpcDocPermissionEnum;
use ZnSandbox\Sandbox\Rpc\Domain\Enums\Rbac\RpcSettingsPermissionEnum;
use ZnUser\Password\Domain\Enums\Rbac\SecurityPermissionEnum;

return [
    'roleEnums' => [
        ApplicationRoleEnum::class,
        SystemRoleEnum::class,
        MoneyRoleEnum::class,
    ],
    'permissionEnums' => [
        AppUserPermissionEnum::class,
        AppPersonPermissionEnum::class,
        SecurityPermissionEnum::class,
        FixturePermissionEnum::class,
        CommonPermissionEnum::class,
        ExtraPermissionEnum::class,
        ApplicationPermissionEnum::class,
        RbacItemEnum::class,
        RpcDocPermissionEnum::class,
        IdentityPermissionEnum::class,
        RbacAssignmentEnum::class,
        RpcSettingsPermissionEnum::class,
        LanguageCurrentPermissionEnum::class,
        DashboardPermissionEnum::class,
        UserRegistrationPermissionEnum::class,
        MyPersonPermissionEnum::class,
        MyContactPermissionEnum::class,
        MyChildPermissionEnum::class,
        GeoCountryPermissionEnum::class,
        GeoCurrencyPermissionEnum::class,
        GeoLocalityPermissionEnum::class,
        GeoRegionPermissionEnum::class,
        IinPermissionEnum::class,
        ContactTypePermissionEnum::class,
    ],
    'inheritance' => [
        SystemRoleEnum::GUEST => [
            DashboardPermissionEnum::ALL,
            SecurityPermissionEnum::RESTORE_PASSWORD_REQUEST_ACTIVATION_CODE,
            SecurityPermissionEnum::RESTORE_PASSWORD_CREATE_PASSWORD,
            AppUserPermissionEnum::AUTHENTICATION_GET_TOKEN_BY_PASSWORD,
            FixturePermissionEnum::FIXTURE_IMPORT,
            CommonPermissionEnum::MAIN_PAGE_VIEW,
            AppUserPermissionEnum::AUTHENTICATION_WEB_LOGIN,
            AppUserPermissionEnum::AUTHENTICATION_WEB_LOGOUT,
            LanguageCurrentPermissionEnum::SWITCH,
            UserRegistrationPermissionEnum::REQUEST_ACTIVATION_CODE,
            UserRegistrationPermissionEnum::CREATE_ACCOUNT,

            GameCategoryPermissionEnum::ALL,
            GameCategoryPermissionEnum::ONE,

            GameGamePermissionEnum::ALL,
            GameGamePermissionEnum::ONE,

            GamePartnerPermissionEnum::ALL,
            GamePartnerPermissionEnum::ONE,

        ],
        SystemRoleEnum::USER => [
            SystemRoleEnum::GUEST,
            SecurityPermissionEnum::UPDATE_PASSWORD_UPDATE,
            AppPersonPermissionEnum::PERSON_INFO_UPDATE,
            AppPersonPermissionEnum::PERSON_INFO_ONE,

            MoneyWalletPermissionEnum::All,

            MoneyTransactionPermissionEnum::ALL,
            MoneyTransactionPermissionEnum::ONE,
//            MoneyTransactionPermissionEnum::CREATE,
//            MoneyTransactionPermissionEnum::UPDATE,
//            MoneyTransactionPermissionEnum::DELETE,

            MoneyTransferPermissionEnum::TRANSFER,
        ],
        MoneyRoleEnum::MONEY_ISSUER => [
            SystemRoleEnum::USER,

            MoneyIssuePermissionEnum::ISSUE,
        ],
        SystemRoleEnum::ADMINISTRATOR => [
//            SystemRoleEnum::GUEST,
            SystemRoleEnum::USER,

            GameCategoryPermissionEnum::CREATE,
            GameCategoryPermissionEnum::UPDATE,
            GameCategoryPermissionEnum::DELETE,

            GameGamePermissionEnum::CREATE,
            GameGamePermissionEnum::UPDATE,
            GameGamePermissionEnum::DELETE,

            GamePartnerPermissionEnum::CREATE,
            GamePartnerPermissionEnum::UPDATE,
            GamePartnerPermissionEnum::DELETE,

            TournamentTournamentPermissionEnum::ALL,
            TournamentTournamentPermissionEnum::ONE,
            TournamentTournamentPermissionEnum::CREATE,
            TournamentTournamentPermissionEnum::UPDATE,
            TournamentTournamentPermissionEnum::DELETE,

            TournamentScramblePermissionEnum::ALL,
            TournamentScramblePermissionEnum::ONE,
            TournamentScramblePermissionEnum::CREATE,
            TournamentScramblePermissionEnum::UPDATE,
            TournamentScramblePermissionEnum::DELETE,

            TournamentSubscriptionPermissionEnum::ALL,
            TournamentSubscriptionPermissionEnum::ONE,
            TournamentSubscriptionPermissionEnum::CREATE,
            TournamentSubscriptionPermissionEnum::UPDATE,
            TournamentSubscriptionPermissionEnum::DELETE,

            ApplicationPermissionEnum::ALL,
            ApplicationPermissionEnum::ONE,
            ApplicationPermissionEnum::CREATE,
            ApplicationPermissionEnum::UPDATE,
            ApplicationPermissionEnum::DELETE,

            RbacItemEnum::ALL,
            RbacItemEnum::ONE,
            RbacItemEnum::CREATE,
            RbacItemEnum::UPDATE,
            RbacItemEnum::DELETE,

            RbacAssignmentEnum::ATTACH,
            RbacAssignmentEnum::DETACH,
            RbacAssignmentEnum::ALL_ROLES,

            IdentityPermissionEnum::ALL,
            IdentityPermissionEnum::ONE,
            IdentityPermissionEnum::CREATE,
            IdentityPermissionEnum::UPDATE,
            IdentityPermissionEnum::DELETE,

            RpcDocPermissionEnum::ALL,
            RpcDocPermissionEnum::ONE,
            RpcDocPermissionEnum::DOWNLOAD,

            RpcSettingsPermissionEnum::UPDATE,
            RpcSettingsPermissionEnum::VIEW,

            ExtraPermissionEnum::ADMIN_ONLY,
            ExtraPermissionEnum::ADMIN_ONLY_ALL,
            ExtraPermissionEnum::ADMIN_ONLY_ONE,
            ExtraPermissionEnum::ADMIN_ONLY_CREATE,
            ExtraPermissionEnum::ADMIN_ONLY_UPDATE,
            ExtraPermissionEnum::ADMIN_ONLY_DELETE,
        ],
    ],
];
