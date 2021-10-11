<?php

return [
	'singletons' => [
		'App\\Tournament\\Domain\\Interfaces\\Services\\TournamentServiceInterface' => 'App\\Tournament\\Domain\\Services\\TournamentService',
		'App\\Tournament\\Domain\\Interfaces\\Repositories\\TournamentRepositoryInterface' => 'App\\Tournament\\Domain\\Repositories\\Eloquent\\TournamentRepository',
		'App\\Tournament\\Domain\\Interfaces\\Services\\SubscriptionServiceInterface' => 'App\\Tournament\\Domain\\Services\\SubscriptionService',
		'App\\Tournament\\Domain\\Interfaces\\Repositories\\SubscriptionRepositoryInterface' => 'App\\Tournament\\Domain\\Repositories\\Eloquent\\SubscriptionRepository',
		'App\\Tournament\\Domain\\Interfaces\\Services\\ScrambleServiceInterface' => 'App\\Tournament\\Domain\\Services\\ScrambleService',
		'App\\Tournament\\Domain\\Interfaces\\Repositories\\ScrambleRepositoryInterface' => 'App\\Tournament\\Domain\\Repositories\\Eloquent\\ScrambleRepository',
	],
	'entities' => [
		'App\\Tournament\\Domain\\Entities\\TournamentEntity' => 'App\\Tournament\\Domain\\Interfaces\\Repositories\\TournamentRepositoryInterface',
		'App\\Tournament\\Domain\\Entities\\SubscriptionEntity' => 'App\\Tournament\\Domain\\Interfaces\\Repositories\\SubscriptionRepositoryInterface',
		'App\\Tournament\\Domain\\Entities\\ScrambleEntity' => 'App\\Tournament\\Domain\\Interfaces\\Repositories\\ScrambleRepositoryInterface',
	],
];