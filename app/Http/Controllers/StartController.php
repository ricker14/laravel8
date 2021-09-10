namespace App\Http\Controllers\StartController;

class StartController extends Controller
{
    public function generate(Request $request)
    {
        // Initialize variables from session
        $this->getVarsFromSession($request);

        return view('start', [
        ]);
    }
}
