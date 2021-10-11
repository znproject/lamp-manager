<?php

return [
	'singletons' => [
		'App\\Game\\Domain\\Interfaces\\Services\\CategoryServiceInterface' => 'App\\Game\\Domain\\Services\\CategoryService',
		'App\\Game\\Domain\\Interfaces\\Repositories\\CategoryRepositoryInterface' => 'App\\Game\\Domain\\Repositories\\Eloquent\\CategoryRepository',
		'App\\Game\\Domain\\Interfaces\\Services\\GameServiceInterface' => 'App\\Game\\Domain\\Services\\GameService',
		'App\\Game\\Domain\\Interfaces\\Repositories\\GameRepositoryInterface' => 'App\\Game\\Domain\\Repositories\\Eloquent\\GameRepository',
		'App\\Game\\Domain\\Interfaces\\Services\\PartnerServiceInterface' => 'App\\Game\\Domain\\Services\\PartnerService',
		'App\\Game\\Domain\\Interfaces\\Repositories\\PartnerRepositoryInterface' => 'App\\Game\\Domain\\Repositories\\Eloquent\\PartnerRepository',
	],
	'entities' => [
		'App\\Game\\Domain\\Entities\\CategoryEntity' => 'App\\Game\\Domain\\Interfaces\\Repositories\\CategoryRepositoryInterface',
		'App\\Game\\Domain\\Entities\\GameEntity' => 'App\\Game\\Domain\\Interfaces\\Repositories\\GameRepositoryInterface',
		'App\\Game\\Domain\\Entities\\PartnerEntity' => 'App\\Game\\Domain\\Interfaces\\Repositories\\PartnerRepositoryInterface',
	],
];