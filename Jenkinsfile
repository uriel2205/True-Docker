pipeline {
  agent any
  stages {
    stage('docker-compose build') {
      agent any
      steps {
        sh 'docker-compose up -d --build'
      }
    }
    }
  }