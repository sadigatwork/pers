class GeospatialController extends Controller {
    public function store(Request $request) {
        $data = $request->validate([
            'coordinates' => 'required',
            'name_en' => 'required',
            'name_ar' => 'required'
        ]);
        
        // Save bilingual names
        FarmLocation::create($data);
    }
}