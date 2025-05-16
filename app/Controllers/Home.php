<?php

namespace App\Controllers;
use Dompdf\Dompdf;
use Dompdf\Options;
use TCPDF;
use App\Models\M_der;

class Home extends BaseController
{
	public function index()
	{
		echo view('welcome_message');
	}
    public function login()
    {
        echo view ('pages-login');
    }

     public function aksi_login()
    {
        $a=$this->request->getpost('email');
          $b=$this->request->getpost('pswd');   

          $Joyce = new M_der;
          $data = array(
            'username' => $a,
            'password' => $b,
          );

          $cek = $Joyce->getWhere('user',$data);

         if ($cek != null) {
          session()->set('id',$cek->id_user);
          session()->set('u',$cek->username);
          session()->set('level',$cek->level);
          return redirect()->to('home/dashboard');
         }else{
          return redirect()->to('home/login');
         }
    }
    public function logout()
    {
      session()->destroy();
      return redirect()->to('home/login');
    }
    public function dashboard()
    {
      if (session()->get('id')>0) {
      echo view ('surga.php');
      echo view ('menu.php');
        echo view ('neraka.php');
      }else{
        return redirect()->to('home/login');
      }
    }
      public function user()
    {
       if (session()->get('level')==1) {
        $Joyce= new M_der;
        $wendy['marah']=$Joyce->join('user', 'karyawan',
         'user.id_user=karyawan.id_user');
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('tampiluser.php',$wendy);
        echo view ('neraka.php');
         }else if (session()->get('level')>0){
        return redirect()->to('home/error');
      }else{
        return redirect()->to('home');
      }
    }
    public function tampilserah()
    {
      $Joyce= new M_der;
        $wendy['marah']=$Joyce->eltampil('serah');
      echo view ('surga.php');
        echo view ('menu.php');
        echo view ('tampilserah',$wendy);
        echo view ('neraka.php');
    }
    public function usr()
    {
       if (session()->get('level')==1) {
        $Joyce= new M_der;
        $wendy['marah']=$Joyce->tampil('user');
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('reset.php',$wendy);
        echo view ('neraka.php');
         }else if (session()->get('level')>0){
        return redirect()->to('home/error');
      }else{
        return redirect()->to('home');
      }
    }
   public function lbarang()
    {
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('lbarang.php');
        echo view ('neraka.php');
    }
   public function lbarangm()
    {
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('lbarangm.php');
        echo view ('neraka.php');
    }
    public function lbarangm_1()
    {
      $Joyce= new M_der;
       $a=$this->request->getPost('tanggal_awal');
      $b=$this->request->getPost('tanggal_akhir');

        $wendy['marah']=$Joyce->filter('barang_masuk','barang','barang_masuk.id_barang=barang.id_barang','tanggal_diterima >=','tanggal_diterima <=', $a, $b);
        echo view ('laporan_bm.php',$wendy);
    }
    public function excellapor_bm()
{
    $Joyce = new M_der;
    $a=$this->request->getPost('tanggal_awal3');
    $b=$this->request->getPost('tanggal_akhir3'); //ambil dari string input
    $wendy['marah']=$Joyce->filter('barang_masuk','barang','barang_masuk.id_barang=barang.id_barang','tanggal_diterima >=','tanggal_diterima <=', $a, $b);
    echo view ('laporan_bm2.php',$wendy);
}
 public function pdflapor_bm()
{
    $Joyce = new M_der;
    $a=$this->request->getPost('tanggal_awal2');
    $b=$this->request->getPost('tanggal_akhir2'); //ambil dari string input
    $wendy['marah']=$Joyce->filter('barang_masuk','barang','barang_masuk.id_barang=barang.id_barang','tanggal_diterima >=','tanggal_diterima <=', $a, $b);
    $pdf = new TCPDF();

    // Setel metadata dasar PDF
    $pdf->SetCreator('TCPDF');
    $pdf->SetAuthor('Nama Anda');
    $pdf->SetTitle('Laporan Barang Masuk');
    $pdf->SetSubject('Laporan PDF');
    $pdf->SetKeywords('TCPDF, PDF, laporan, barang, masuk');

    // Atur halaman PDF
    $pdf->AddPage();

    // Load view and capture output
    $html = view('laporan_bm3', ['marah' => $wendy]);

    // Render HTML ke PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // Output file PDF
    $pdf->Output('laporan_barang_masuk.pdf', 'D'); // 'D' untuk download, 'I' untuk menampilkan di browser
}
     public function lbarang_1()
    {
      $Joyce= new M_der;
        $where=('id_barang');
        $wendy['marah']=$Joyce->tampil('barang',$where);
        echo view ('laporan_barang.php',$wendy);
    }
    public function lbarangk_1()
    {
      $Joyce= new M_der;
       $a=$this->request->getPost('tanggal_awal');
      $b=$this->request->getPost('tanggal_akhir');

        $wendy['marah']=$Joyce->filter('barang_keluar','barang','barang_keluar.id_barang=barang.id_barang','tanggal_keluar >=','tanggal_keluar <=', $a, $b);
        echo view ('laporan_bk.php',$wendy);
    }
        public function excellapor_bk()
{
    $Joyce = new M_der;
    $a=$this->request->getPost('tanggal_awal3');
    $b=$this->request->getPost('tanggal_akhir3'); //ambil dari string input
    $wendy['marah']=$Joyce->filter('barang_keluar','barang','barang_keluar.id_barang=barang.id_barang','tanggal_keluar >=','tanggal_keluar <=', $a, $b);
    echo view ('laporan_bk2.php',$wendy);
}
 public function pdflapor_bk()
{
    $Joyce = new M_der;
    $a=$this->request->getPost('tanggal_awal2');
    $b=$this->request->getPost('tanggal_akhir2'); //ambil dari string input
    $wendy['marah']=$Joyce->filter('barang_keluar','barang','barang_keluar.id_barang=barang.id_barang','tanggal_keluar >=','tanggal_keluar <=', $a, $b);
    $pdf = new TCPDF();

    // Setel metadata dasar PDF
    $pdf->SetCreator('TCPDF');
    $pdf->SetAuthor('Nama Anda');
    $pdf->SetTitle('Laporan Barang Keluar');
    $pdf->SetSubject('Laporan PDF');
    $pdf->SetKeywords('TCPDF, PDF, laporan, barang, keluar');

    // Atur halaman PDF
    $pdf->AddPage();

    // Load view and capture output
    $html = view('laporan_bk3', ['marah' => $wendy]);

    // Render HTML ke PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // Output file PDF
    $pdf->Output('laporan_barang_keluar.pdf', 'D'); // 'D' untuk download, 'I' untuk menampilkan di browser
}
    public function lbarangk()
    {
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('lbarangk.php');
        echo view ('neraka.php');
    }
      public function lbarangr()
    {
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('lbarangr.php');
        echo view ('neraka.php');
    }
      public function barang()
    {
      if (session()->get('id')>0) {
        $Joyce= new M_der;
        $where=('id_barang');
        $wendy['marah']=$Joyce->tampil('barang',$where);
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('tampilbarang.php',$wendy);
        echo view ('neraka.php');
        }else{
        return redirect()->to('home/login');
      }
    }
      public function inputbrg()
    {
        $Joyce= new M_der;
        $where=('id_barang');
        $wendy['marah']=$Joyce->tampil('barang',$where);
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('Inputbarang.php',$wendy);
        echo view ('neraka.php');
    }
     public function inputuser()
    {
        $Joyce= new M_der;
        $where=('id_user');
        $wendy['marah']=$Joyce->tampil('user',$where);
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('Inputuser.php',$wendy);
        echo view ('neraka.php');
    }
    public function inputbrgm()
    {
        $Joyce= new M_der;
        $where=('id_barang');
        $wendy['marah']=$Joyce->tampil('barang',$where);
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('Inputbarangmasuk.php',$wendy);
        echo view ('neraka.php');
    }
     public function inputbrgk()
    {
        $Joyce= new M_der;
        $wendy['marah']=$Joyce->tampil('barang');
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('Inputbarangkeluar.php',$wendy);
        echo view ('neraka.php');
    }
    public function inputbrgr()
    {
        $Joyce= new M_der;
        $where=('id_barang');
        $wendy['marah']=$Joyce->tampil('barang',$where);
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('Inputbarangrusak.php',$wendy);
        echo view ('neraka.php');
    }
     public function barangmasuk()
    {
      if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==5
  || session()->get('level')==3 ) {
        $Joyce= new M_der;
        $wendy['marah']= $Joyce->join('barang_masuk', 'barang',
         'barang_masuk.id_barang=barang.id_barang');
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('tampilbarangmasuk.php',$wendy);
        echo view ('neraka.php');
        }else if (session()->get('level')>0){
        return redirect()->to('home/error');
      }else{
        return redirect()->to('home');
      }
    }
     public function barangkeluar()
    {
      if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==4 ||session()->get('level')==3 ) {
        $Joyce= new M_der;
        $wendy['marah']= $Joyce->join('barang_keluar', 'barang', 'barang_keluar.id_barang=barang.id_barang');
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('tampilbarangkeluar.php',$wendy);
        echo view ('neraka.php');
        }else if (session()->get('level')>0){
        return redirect()->to('home/error');
      }else{
        return redirect()->to('home');
      }
    }
     public function barangrusak()
    {
       if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==5
       || session()->get('level')==3 ) {
        $Joyce= new M_der;
        $wendy['marah']= $Joyce->join('barang_rusak', 'barang', 'barang_rusak.id_barang=barang.id_barang');
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('tampilbarangrusak.php',$wendy);
        echo view ('neraka.php');
        }else if (session()->get('level')>0){
        return redirect()->to('home/error');
      }else{
        return redirect()->to('home');
      }
    }

    public function hapus_barang($id){
        $Joyce= new M_der;
        $wece= array('id_barang' => $id);
        $wendy['marah'] = $Joyce->hapus('barang', $wece);
        return redirect()->to('home/barang');
    }
     public function editbrg($id)
    {
        $Joyce= new M_der;
        $wece=array('id_barang' => $id);
        $wendy['marah']=$Joyce->eltampil('barang');
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('editbrg.php',$wendy);
        echo view ('neraka.php');
    }
    public function simpan_barang()
    {
      $n=$this->request->getPost('nama_barang');
      $p=$this->request->getPost('kode_barang');
      $l=$this->request->getPost('stok');
       $id=$this->request->getPost('id');
        $Joyce= new M_der;
         $data=array(
         "nama_barang"=>$n,
          "kode_barang"=>$p,
           "stok"=>$l
        );
          $Joyce->edit('barang',$data);
        return redirect()->to('home/barang');
    }
   public function input_barang()
   {
            $Joyce= new M_der;
           $data = array (         
            'nama_barang'=> $this->request->getPost('nama'),
           'kode_barang'=> $this->request->getPost('kode_barang'),
            'stok'=> $this->request->getPost('stok'),
           );

           $Joyce->input('barang',$data);
           return redirect()->to('/home/barang');
         
   }
     public function hapus_user($id){
        $Joyce= new M_der;
        $wece= array('id_user' => $id);
        $wendy['marah'] = $Joyce->hapus('user', $wece);
        return redirect()->to('home/user');
    }
    public function input_user()
   {
     $file = $_FILES["file"];
         $validExtensions = ["jpg", "png", "jpeg"];
         $extension = pathinfo($file["name"], PATHINFO_EXTENSION);
         $timestamp = time(); 
         $newFileName = $timestamp . "_" . $file["name"]; 
         move_uploaded_file($file["tmp_name"], "img/" . $newFileName);
         $data['foto'] = $newFileName; 

            $Joyce= new M_der;
           $data = array (
            'id_user'=> $this->request->getPost('id_user'),
            'username'=> $this->request->getPost('username'),
           'password'=> $this->request->getPost('Password'),
            'level'=> $this->request->getPost('level'),
             'foto'=> $this->request->getPost('file'),
           );

           $Joyce->input('user',$data);
           return redirect()->to('/home/user');
         
   }
   public function hapus_barangm($id){
if (session()->get('level')==1 || session()->get('level')==3) {
        $Joyce= new M_der;
        $wece= array('id_barang' => $id);
         $Joyce->hapus('barang_masuk', $wece);
         $Joyce->hapus('barang', $wece);
        return redirect()->to('home/barangmasuk');
}else if (session()->get('level')>0){
        return redirect()->to('home/error');
      }else{
        return redirect()->to('home');
      }
    }
    public function editbrgm($id)
    {
        $Joyce= new M_der;
        $wece=array('barang_masuk.id_barang' => $id);
        $wendy['marah']=$Joyce->joinw('barang_masuk', 'barang', 'barang_masuk.id_barang=barang.id_barang',$wece);
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('editbrgm.php',$wendy);
        echo view ('neraka.php');
    }
    public function simpan_barangm()
    {
      $n=$this->request->getPost('tanggal_diterima');
      $p=$this->request->getPost('jumlah');
      $l=$this->request->getPost('nama');
       $b=$this->request->getPost('kode_barang');
        $c=$this->request->getPost('stok');
        $id=$this->request->getPost('id');

        $where=array(
          "id_barang"=>$id);
        $Joyce= new M_der;
         $data1=array(
         "nama_barang"=>$l,
          "kode_barang"=>$b,
           "stok"=>$c
        );
         $Joyce->edit('barang',$data1,$where);


        $data2=array(
         "tanggal_diterima"=>$n, 
         "jumlah"=>$p
        );
        print_r($where);
        $Joyce->edit('barang_masuk',$data2,$where);
        return redirect()->to('home/barangmasuk');      
      }
    public function input_barangm()
{
    $a = $this->request->getPost('tanggal_diterima');
    $b = $this->request->getPost('jumlah');
    $c = $this->request->getPost('nama');
    $d = $this->request->getPost('kode_barang');
    $e = $this->request->getPost('stok');

    $Joyce = new M_der;
    $data = array(
        "nama_barang" => $c,
        "kode_barang" => $d,
        "stok" => $e
    );
    $Joyce->input('barang', $data);

    $where = array(
        "nama_barang" => $c,
    );
    $wendy = $Joyce->getWhere('barang', $where);
    $data2 = array(
        "id_barang" => $wendy->id_barang,
        "tanggal_diterima" => $a,
        "jumlah" => $b
    );
    $Joyce->input('barang_masuk', $data2);
    return redirect()->to('home/barangmasuk');
}
   public function hapus_barangk($id){
if (session()->get('level')==1 || session()->get('level')==3) {
        $Joyce= new M_der;
        $wece= array('id_barang' => $id);
         $Joyce->hapus('barang_keluar', $wece);
         $Joyce->hapus('barang', $wece);
        return redirect()->to('home/barangkeluar');
}else if (session()->get('level')>0){
        return redirect()->to('home/error');
      }else{
        return redirect()->to('home');
      }
    }
    public function editbrgk($id)
    {
        $Joyce= new M_der;
        $wece=array('barang_keluar.id_barang' => $id);
        $wendy['marah']=$Joyce->joinw('barang_keluar', 'barang', 'barang_keluar.id_barang=barang.id_barang',$wece);
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('editbrgk.php',$wendy);
        echo view ('neraka.php');
    }
    public function simpan_barangk()
    {
      $n=$this->request->getPost('tanggal_keluar');
      $p=$this->request->getPost('jumlah');
      $l=$this->request->getPost('nama');
       $b=$this->request->getPost('kode_barang');
        $c=$this->request->getPost('stok');
        $id=$this->request->getPost('id');

        $where=array(
          "id_barang"=>$id);
        $Joyce= new M_der;
         $data1=array(
         "nama_barang"=>$l,
          "kode_barang"=>$b,
           "stok"=>$c
        );
         $Joyce->edit('barang',$data1,$where);


        $data2=array(
         "tanggal_keluar"=>$n, 
         "jumlah"=>$p
        );
        print_r($where);
        $Joyce->edit('barang_keluar',$data2,$where);
        return redirect()->to('home/barangkeluar');      
      }
    public function input_barangk()
{
    $a = $this->request->getPost('tanggal_keluar');
    $b = $this->request->getPost('jumlah');
    $c = $this->request->getPost('nama');
    $d = $this->request->getPost('kode_barang');
    $e = $this->request->getPost('stok');

    $Joyce = new M_der;
    $data = array(
        "nama_barang" => $c,
        "kode_barang" => $d,
        "stok" => $e
    );
    $Joyce->input('barang', $data);

    $where = array(
        "nama_barang" => $c,
    );
    $wendy = $Joyce->getWhere('barang', $where);
    $data2 = array(
        "id_barang" => $wendy->id_barang,
        "tanggal_keluar" => $a,
        "jumlah" => $b
    );
    $Joyce->input('barang_keluar', $data2);
    return redirect()->to('home/barangkeluar');
}
     public function hapus_barangr($id){
if (session()->get('level')==1 || session()->get('level')==3) {
        $Joyce= new M_der;
        $wece= array('id_barang' => $id);
         $Joyce->hapus('barang_rusak', $wece);
         $Joyce->hapus('barang', $wece);
        return redirect()->to('home/barangrusak');
}else if (session()->get('level')>0){
        return redirect()->to('home/error');
      }else{
        return redirect()->to('home');
      }
    }
    public function editbrgr($id)
    {
        $Joyce= new M_der;
        $wece=array('barang_rusak.id_barang' => $id);
        $wendy['marah']=$Joyce->joinw('barang_rusak', 'barang', 'barang_rusak.id_barang=barang.id_barang',$wece);
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('editbrgr.php',$wendy);
        echo view ('neraka.php');
    }
    public function simpan_barangr()
    {
      $n=$this->request->getPost('tanggal_rusak');
      $p=$this->request->getPost('jumlah');
      $l=$this->request->getPost('nama');
       $b=$this->request->getPost('kode_barang');
        $c=$this->request->getPost('stok');
        $id=$this->request->getPost('id');

        $where=array(
          "id_barang"=>$id);
        $Joyce= new M_der;
         $data1=array(
         "nama_barang"=>$l,
          "kode_barang"=>$b,
           "stok"=>$c
        );
         $Joyce->edit('barang',$data1,$where);


        $data2=array(
         "tanggal_rusak"=>$n, 
         "jumlah"=>$p
        );
        print_r($where);
        $Joyce->edit('barang_rusak',$data2,$where);
        return redirect()->to('home/barangrusak');      
      }
    public function input_barangr()
{
    $a = $this->request->getPost('tanggal_rusak');
    $b = $this->request->getPost('jumlah');
    $c = $this->request->getPost('nama');
    $d = $this->request->getPost('kode_barang');
    $e = $this->request->getPost('stok');

    $Joyce = new M_der;
    $data = array(
        "nama_barang" => $c,
        "kode_barang" => $d,
        "stok" => $e
    );
    $Joyce->input('barang', $data);

    $where = array(
        "nama_barang" => $c,
    );
    $wendy = $Joyce->getWhere('barang', $where);
    $data2 = array(
        "id_barang" => $wendy->id_barang,
        "tanggal_rusak" => $a,
        "jumlah" => $b
    );
    $Joyce->input('barang_rusak', $data2);
    return redirect()->to('home/barangrusak');
}
public function lbarangr_1()
    {
      $Joyce= new M_der;
       $a=$this->request->getPost('tanggal_awal');
      $b=$this->request->getPost('tanggal_akhir');

        $wendy['marah']=$Joyce->filter('barang_rusak','barang','barang_rusak.id_barang=barang.id_barang','tanggal_rusak >=','tanggal_rusak <=', $a, $b);
        echo view ('laporan_br.php',$wendy);
    }
    public function excellapor_br()
{
    $Joyce = new M_der;
    $a=$this->request->getPost('tanggal_awal3');
    $b=$this->request->getPost('tanggal_akhir3'); //ambil dari string input
    $wendy['marah']=$Joyce->filter('barang_rusak','barang','barang_rusak.id_barang=barang.id_barang','tanggal_rusak >=','tanggal_rusak <=', $a, $b);
    echo view ('laporan_br2.php',$wendy);
}
 public function pdflapor_br()
{
    $Joyce = new M_der;
    $a=$this->request->getPost('tanggal_awal2');
    $b=$this->request->getPost('tanggal_akhir2'); //ambil dari string input
    $wendy['marah']=$Joyce->filter('barang_masuk','barang','barang_masuk.id_barang=barang.id_barang','tanggal_rusak >=','tanggal_rusak <=', $a, $b);
    $pdf = new TCPDF();

    // Setel metadata dasar PDF
    $pdf->SetCreator('TCPDF');
    $pdf->SetAuthor('Nama Anda');
    $pdf->SetTitle('Laporan Barang Rusak');
    $pdf->SetSubject('Laporan PDF');
    $pdf->SetKeywords('TCPDF, PDF, laporan, barang, rusak');

    // Atur halaman PDF
    $pdf->AddPage();

    // Load view and capture output
    $html = view('laporan_br3', ['marah' => $wendy]);

    // Render HTML ke PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // Output file PDF
    $pdf->Output('laporan_barang_rusak.pdf', 'D'); // 'D' untuk download, 'I' untuk menampilkan di browser
}
    public function karyawan()
    {
    if (session()->get('level')==1) { 
        $Joyce= new M_der;
        $wendy['marah']=$Joyce->join('karyawan', 'user', 'karyawan.id_user=user.id_user');
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('tampilkaryawan.php',$wendy);
        echo view ('neraka.php');      
      }else{
        return redirect()->to('home');
      }
    }
     public function inputkaryawan()
    {
        $Joyce= new M_der;
        $where=('id_user');
        $wendy['marah']=$Joyce->tampil('user',$where);
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('inputkaryawan.php',$wendy);
        echo view ('neraka.php');
    }
    public function hapus_karyawan($id){
        $Joyce= new M_der;
        $wece= array('id_user' => $id);
         $Joyce->hapus('karyawan', $wece);
         $Joyce->hapus('user', $wece);
        return redirect()->to('home/karyawan');
    }
   public function input_karyawan()
{
    $a = $this->request->getPost('nama');
    $b = $this->request->getPost('NIK');
    $c = $this->request->getPost('username');
    $d = $this->request->getPost('level');
    $e = $this->request->getPost('password');
    $f = $this->request->getPost('tanggal_lahir');
    $g = $this->request->getPost('jeniskel');
    $h = $this->request->getPost('alamat');
    $i = $this->request->getPost('no_hp');

    $Joyce = new M_der;
    $data = array(
        "username" => $c,
        "password" => $e,
        "level" => $d
    );
    $Joyce->input('user', $data);

    $where = array(
        "username" => $c,
    );
    $wendy = $Joyce->getWhere('user', $where);
    $data2 = array(
        "id_user" => $wendy->id_user,
        "nama" => $a,
        "NIK" => $b,
        "tanggal_lahir" => $f,
        "jeniskel" => $g,
        "alamat" => $h,
        "no_hp" => $i
    );
    $Joyce->input('karyawan', $data2);
    return redirect()->to('home/karyawan');
}
public function editkaryawan($id)
    {
        $Joyce= new M_der;
        $wece=array('karyawan.id_user' => $id);
        $wendy['marah']=$Joyce->joinw('karyawan', 'user', 'karyawan.id_user=user.id_user',$wece);
        echo view ('surga.php');
        echo view ('menu.php');
        echo view ('editkaryawan.php',$wendy);
        echo view ('neraka.php');
    }
    public function simpan_karyawan()
    {
      $n=$this->request->getPost('username');
      $p=$this->request->getPost('password');
      $l=$this->request->getPost('level');
       $b=$this->request->getPost('nama');
        $c=$this->request->getPost('NIK');
        $e=$this->request->getPost('tanggal_lahir');
       $f=$this->request->getPost('jeniskel');
        $g=$this->request->getPost('alamat');
        $i=$this->request->getPost('no_hp');
        $id=$this->request->getPost('id');

        $where=array(
          "id_user"=>$id);
        $Joyce= new M_der;
         $data1=array(
         "username"=>$n,
          "level"=>$l
        );
         $Joyce->edit('user',$data1,$where);


        $data2=array(
         "nama"=>$b, 
         "NIK"=>$c,
         "tanggal_lahir"=>$e,
         "jeniskel"=>$f, 
         "alamat"=>$g,
         "no_hp"=>$i,
        );
        print_r($where);
        $Joyce->edit('karyawan',$data2,$where);
        return redirect()->to('home/karyawan');      
      }
    }