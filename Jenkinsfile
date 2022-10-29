pipeline {
  agent any
  tools {
    docker 'Docker'
  }
  stages {
    stage('docker-compose build') {
      agent any
      steps {
        sh 'docker compose up -d --build'
      }
      
    }
    }
  }