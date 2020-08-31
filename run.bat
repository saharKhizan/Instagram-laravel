@echo off
call npm install && (
    echo node js installed
    call composer install && (
       echo Composer installed
	   call php artisan storage:link && (
		echo storage link created.
		call php artisan migrate && (
			(
			echo *****************************************
			echo *               ヽ(•‿•)ノ                 *
			echo *                                       *
			echo *            congratulation             *
			echo *                                       *
			echo *  now your project is ready to launch  *
			echo *                                       *
			echo *           run this command:           *
			echo *           php artisan serve           *
			echo *****************************************
			)
		) || (
				echo *****************************************
				echo *                -_-                    *
				echo *                                       *
				echo *      php artisan command failed       *
				echo *                                       *
				echo *****************************************
		)
	   ) || (
			echo *****************************************
			echo *                -_-                    *
			echo *                                       *
			echo *      php artisan command failed       *
			echo *                                       *
			echo *****************************************
	   )
    ) || (
		echo *****************************************
		echo *                -_-                    *
		echo *                                       *
		echo *       composer command failed         *
		echo *                                       *
		echo *       please first be sure you        *
		echo *       have composer in your pc        *
		echo *                                       *
		echo *****************************************
	)
) || (
	echo *****************************************
	echo *                -_-                    *
	echo *                                       *
	echo *          npm command failed           *
	echo *                                       *
	echo *       please first be sure you        *
	echo *        have Nodejs in your pc         *
	echo *                                       *
	echo *****************************************
)