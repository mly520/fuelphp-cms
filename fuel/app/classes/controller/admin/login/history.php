<?php
class Controller_Admin_Login_History extends Controller_Admin 
{

	public function action_index()
	{
		$data['login_histories'] = Model_Login_History::find('all');
		$this->template->title = "Login_histories";
		$this->template->content = View::forge('admin/login/history/index', $data);

	}

	public function action_view($id = null)
	{
		$data['login_history'] = Model_Login_History::find($id);

		$this->template->title = "Login_history";
		$this->template->content = View::forge('admin/login/history/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Login_History::validate('create');

			if ($val->run())
			{
				$login_history = Model_Login_History::forge(array(
					'user_id' => Input::post('user_id'),
					'login_date' => Input::post('login_date'),
				));

				if ($login_history and $login_history->save())
				{
					Session::set_flash('success', e('Added login_history #'.$login_history->id.'.'));

					Response::redirect('admin/login/history');
				}

				else
				{
					Session::set_flash('error', e('Could not save login_history.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Login_Histories";
		$this->template->content = View::forge('admin/login/history/create');

	}

	public function action_edit($id = null)
	{
		$login_history = Model_Login_History::find($id);
		$val = Model_Login_History::validate('edit');

		if ($val->run())
		{
			$login_history->user_id = Input::post('user_id');
			$login_history->login_date = Input::post('login_date');

			if ($login_history->save())
			{
				Session::set_flash('success', e('Updated login_history #' . $id));

				Response::redirect('admin/login/history');
			}

			else
			{
				Session::set_flash('error', e('Could not update login_history #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$login_history->user_id = $val->validated('user_id');
				$login_history->login_date = $val->validated('login_date');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('login_history', $login_history, false);
		}

		$this->template->title = "Login_histories";
		$this->template->content = View::forge('admin/login/history/edit');

	}

	public function action_delete($id = null)
	{
		if ($login_history = Model_Login_History::find($id))
		{
			$login_history->delete();

			Session::set_flash('success', e('Deleted login_history #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete login_history #'.$id));
		}

		Response::redirect('admin/login/history');

	}


}