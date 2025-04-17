class EquipmentValidator {
    public function validateCalibration(array $data): bool {
        // Bilingual error messages
        if(!$data['expiry_date']) {
            throw new \Exception(__('equipment.invalid_date'));
        }
    }
}