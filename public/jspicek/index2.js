import TeachableMachine from "@sashido/teachablemachine-node";
import fs from 'fs/promises';
import path from 'path';
import { fileURLToPath } from 'url';

// Helper untuk mendapatkan __dirname di ES Modules
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Definisikan path ke file JSON dan gambar
const dataFilePath = path.join(__dirname, 'data.json');

// Buat instance TeachableMachine
const model = new TeachableMachine({
    modelUrl: "https://teachablemachine.withgoogle.com/models/Lqr-431p4/"
});

async function processPrediction() {
    try {
        // Baca ulang data.json untuk update
        const currentData = await fs.readFile(dataFilePath, 'utf8');
        const updatedJson = JSON.parse(currentData);
        const fileName = updatedJson.name;
        const extension = path.extname(fileName).slice(1);
        const imagePath = path.join(__dirname, 'gambar', fileName);
        console.log("url:", extension);
        const imageBuffer = await fs.readFile(imagePath);

        // Konversi buffer gambar menjadi Base64 string
        const imageBase64 = imageBuffer.toString('base64');
        const imageDataUrl = `data:image/${extension};base64,${imageBase64}`;
        console.log(imagePath);

        const predictions = await model.classify({
            imageUrl: imageDataUrl,
        });

        console.log("Predictions:", predictions);

        // Pastikan ada prediksi yang berhasil
        if (!predictions || predictions.length === 0) {
            console.error("Gagal mendapatkan prediksi dari model.");
            return;
        }


        // Ambil tanggal dan waktu saat ini
        const now = new Date();
        const options = {
            timeZone: 'Asia/Jakarta',
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false // Menggunakan format 24 jam
        };

        // Buat string tanggal dalam format YYYY-MM-DD
        const dateTimeString = now.toLocaleDateString('en-CA', options);


        // Update objek JSON dengan data prediksi
        updatedJson.nama = predictions[0].class;
        updatedJson.skor = predictions[0].score;
        updatedJson.tanggal = dateTimeString;

        // Tulis kembali data yang sudah di-update ke file JSON
        const newJsonData = JSON.stringify(updatedJson, null, 2);
        await fs.writeFile(dataFilePath, newJsonData, 'utf8');

        console.log("Data berhasil diperbarui di data.json.");

    } catch (e) {
        console.error("Terjadi ERROR:", e);
    }
}

// Jalankan fungsi utama
processPrediction();
