node {
    stage('preparation') {
        // Checkout the master branch of the Laravel framework repository
        git branch: 'master', url: 'https://github.com/silvanei/zf3-skeleton.git'
    }
    stage("composer_install") {
        // Run `composer update` as a shell script
        sh 'composer install --no-interaction'
    }
    stage("phpunit") {
        // Run PHPUnit
        sh 'vendor/bin/phpunit'
    }
    stage("phing") {
        sh 'phing build'
    }
    stage("Report") {
        checkstyle canComputeNew: false, defaultEncoding: '', healthy: '', pattern: 'build/logs/checkstyle.xml', unHealthy: ''
        pmd canComputeNew: false, defaultEncoding: '', healthy: '', pattern: 'build/logs/pmd.xml', unHealthy: ''
        dry canComputeNew: false, defaultEncoding: '', healthy: '', pattern: 'build/logs/pmd-cpd.xml', unHealthy: ''

        junit allowEmptyResults: true, keepLongStdio: true, testResults: 'build/logs/junit.xml'

        publishHTML(target: [
            allowMissing: false,
            alwaysLinkToLastBuild: false,
            keepAll: true,
            reportDir: 'build/coverage',
            reportFiles: 'index.html',
            reportName: 'Clover HTML Report',
            reportTitles: 'Clover HTML Report'
        ])

        publishHTML(target: [
            allowMissing: false,
            alwaysLinkToLastBuild: false,
            keepAll: true,
            reportDir: 'build/pdepend',
            reportFiles: 'dependencies.svg overview-pyramid.svg',
            reportName: 'pdepend',
            reportTitles: 'pdepend'
        ])
    }
}
