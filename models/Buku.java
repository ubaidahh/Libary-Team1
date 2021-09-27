package com.perpustakaan.projekperpustakaan.models;

import javax.persistence.Entity;
import javax.persistence.Id;
import java.util.UUID;

@Entity
public class Buku {
    @Id
    private String id;
    private int NoBuku;
    private String JudulBuku;
    private String Penerbit;
    private String Penulis;
    private int JumlahHalaman;
    private int JumlahBuku;

    public String getId() {
        if(id == null || id.equals("")) {
            id = UUID.randomUUID().toString();
        }
        return id;
    }

    public void setId(String id) {
        id = id;
    }

    public int getNoBuku() {
        return NoBuku;
    }

    public void setNoBuku(int noBuku) {
        NoBuku = noBuku;
    }

    public String getJudulBuku() {
        return JudulBuku;
    }

    public void setJudulBuku(String judulBuku) {
        JudulBuku = judulBuku;
    }

    public String getPenerbit() {
        return Penerbit;
    }

    public void setPenerbit(String penerbit) {
        Penerbit = penerbit;
    }

    public String getPenulis() {
        return Penulis;
    }

    public void setPenulis(String penulis) {
        Penulis = penulis;
    }

    public int getJumlahHalaman() {
        return JumlahHalaman;
    }

    public void setJumlahHalaman(int jumlahHalaman) {
        JumlahHalaman = jumlahHalaman;
    }

    public int getJumlahBuku() {
        return JumlahBuku;
    }

    public void setJumlahBuku(int jumlahBuku) {
        JumlahBuku = jumlahBuku;
    }
}
