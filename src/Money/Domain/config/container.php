<?php

return [
	'singletons' => [
		'App\\Money\\Domain\\Interfaces\\Services\\TransactionServiceInterface' => 'App\\Money\\Domain\\Services\\TransactionService',
		'App\\Money\\Domain\\Interfaces\\Repositories\\TransactionRepositoryInterface' => 'App\\Money\\Domain\\Repositories\\Eloquent\\TransactionRepository',
		'App\\Money\\Domain\\Interfaces\\Services\\WalletServiceInterface' => 'App\\Money\\Domain\\Services\\WalletService',
		'App\\Money\\Domain\\Interfaces\\Services\\MyWalletServiceInterface' => 'App\\Money\\Domain\\Services\\MyWalletService',
		'App\\Money\\Domain\\Interfaces\\Repositories\\WalletRepositoryInterface' => 'App\\Money\\Domain\\Repositories\\Eloquent\\WalletRepository',
		'App\\Money\\Domain\\Interfaces\\Services\\BalanceServiceInterface' => 'App\\Money\\Domain\\Services\\BalanceService',
		'App\\Money\\Domain\\Interfaces\\Repositories\\BalanceRepositoryInterface' => 'App\\Money\\Domain\\Repositories\\Eloquent\\BalanceRepository',
		'App\\Money\\Domain\\Interfaces\\Services\\TransferServiceInterface' => 'App\\Money\\Domain\\Services\\TransferService',
	],
	'entities' => [
		'App\\Money\\Domain\\Entities\\TransactionEntity' => 'App\\Money\\Domain\\Interfaces\\Repositories\\TransactionRepositoryInterface',
		'App\\Money\\Domain\\Entities\\WalletEntity' => 'App\\Money\\Domain\\Interfaces\\Repositories\\WalletRepositoryInterface',
	],
];