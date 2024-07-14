<?php
					if (isset($_GET['registered'])) {
					?>
						<span class="bg-white text-color='green' text-center my-3">Your account has been created</span>
					<?php
					} else if (isset($_GET['invalid'])) {
					?>
						<span class="bg-white text-danger text-center my-3">Password not matched retype</span>

					<?php
					} else if (isset($_GET['not_registered'])) {
					?>
						<span class="bg-white text-warning text-center my-3">Sorry,You are not registered!</span>

					<?php
					} else if (isset($_GET['invalid_access'])) {
					?>
						<span class="bg-white text-danger text-center my-3">Invalid user name password!</span>
					<?php
					}
					?>