package com.perpustakaan.projekperpustakaan.repositories;

import com.perpustakaan.projekperpustakaan.models.Buku;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface BukuRepositories extends JpaRepository<Buku,String> {
}
